<?php
session_start();
// Retira as vari�veis da sess�o.
$_SESSION = array();
  
//Destr�i o cookie da sess�o
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-30000, '/');
}
  
// Destr�i a sess�o
session_destroy();
  
//Inicia uma nova sess�o
session_start();
session_regenerate_id();
  
$codigo = $_SERVER['HTTP_USER_AGENT'];
$codigo .= 'Marques+Carlos';
$digital = md5($codigo);
/*<a href=php_session_tok_proc.php?marca=<?php echo $digital; ?> > clicar aqui !!!</a>*/
?>
Formulario de autentica��o
<form action="php_session_tok_proc.php" method="POST"> <input type="hidden" name="marca" value="<?php echo $digital; ?>" /><input type="submit"> </form>
...
//Pedido de login/passwords
.....
