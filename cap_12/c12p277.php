<?php
if (!isset($_SERVER['PHP_AUTH_USER'])){
      header("WWW-authenticate: basic realm=\"Qual o Login e Password?\"");
header("HTTP/1.0 401 Unauthorized.");
                exit;
        } else if (isset($_SERVER['PHP_AUTH_USER'])) {
               $db= mysql_connect("localhost","","") or die ("Imposs�vel ligar � base de dados");
                mysql_select_db(testeDB,$db) or die ("Imposs�vel seleccionar a base de dados.");
                $sql = "select * from users where nome ='".$_SERVER['PHP_AUTH_USER']. "' and password='".$_SERVER['PHP_AUTH_PW']."'";
                $resultado = mysql_query($sql,$db);
                $num_linhas = mysql_num_rows($resultado );

                if ($num_linhas > 0) {
                        echo "<P>Est� autorizado!</p>";
                        exit;
                } else {
                        header("WWW-Authenticate: Basic realm=\"S� utilizadores v�lidos\"");
                        header("HTTP/1.0 401 N�o autorizado");
                        echo "Tem de obter autoriza��o!";
                        exit;
                }
        }
?>

