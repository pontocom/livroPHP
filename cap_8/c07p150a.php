<?php

foreach($_POST as $nome_campo => $valor){
   $comando = "\$" . $nome_campo . "='" . $valor . "';";
   eval($comando);
}

if($primeiro_nome) {
    if($ultimo_nome) {
        if ($telefone) {
            if($email1) {
                if($email2) {
                    if($password) {
                        if($password2) {
                            //Vamos ent�o comparar as duas passwords...
                            if($password==$password2) {
                                echo "Registo introduzido com sucesso!!!<br>";
                            } else {
                              echo "As passwords n�o coincidem...";
                            }
                        } else {
                          echo"N�o voltou a introduzir a sua password...<br>";
                        }
                    } else {
                      echo "N�o introduziu a sua password...<br>";
                    }
                } else {
                  echo "Endere�o email incorrecto...<br>";
                }
            } else {
              echo "Endere�o email incorrecto...<br>";
            }
        } else {
          echo "N�o introduziu o telefone...<br>";
        }
    } else {
      echo "N�o introduziu o ultimo nome...<br>";
    }
} else {
  echo "N�o introduziu o primeiro nome...<br>";
}
?>
