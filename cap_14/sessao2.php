<?php
session_start();
/*remover coment�rios qdo necess�rio e comentar a linha que come�a com echo */
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
} else {
    $_SESSION['contador']++;
}

#session_start();
echo "A pagina foi acedida <b>".$_SESSION['contador']."</b> vezes.";
#session_destroy();
#$_SESSION['contador'] = FALSE;
?>
