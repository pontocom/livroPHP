<?php
if (!isset($PHP_AUTH_USER)){
header("WWW-authenticate: basic realm=\"Qual o Login e Password?\"");
header("HTTP/1.0 401 Unauthorized.");
                exit;
        } else if (isset($PHP_AUTH_USER)) {
                mysql_connect("localhost","","") or die ("Imposs�vel ligar � base de dados");
                mysql_select_db("testeDB") or die ("Imposs�vel seleccionar a base de dados.");
                $sql = "SELECT * FROM users WHERE nome=$PHP_AUTH_USER and password=$PHP_AUTH_PW";
                $result = mysql_query($sql);
                $num = mysql_numrows($result);
                if ($num != "0") {
                        echo "<P>Est� autorizado!</p>";
                        exit;
                } else {
                        header("WWW-Authenticate: Basic realm=\"Members Only\"");
                        header("HTTP/1.0 401 N�o autorizado");
                        echo "Tem de ter autoriza��o!";
                        exit;
                }
        }
?>

