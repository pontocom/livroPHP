<?php
if($_POST['primeiro_nome']) {
    if($_POST['ultimo_nome']) {
        if($_POST['telefone']) {
            if($_POST['email1']) {
                if($_POST['email2']) {
                    if($_POST['password']) {
                        if($_POST['password2']) {
                            //Vamos ent�o comparar as duas passwords...
                            if($_POST['password']==$_POST['password2']) {
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


