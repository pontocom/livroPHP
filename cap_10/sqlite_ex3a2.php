<?
if(isset($_REQUEST['go']) && $_REQUEST['go']!='')
{
	// abre a Base de Dados SQLite
	$bd = new SQLiteDatabase("BaseDeDados.sqlite2");
	// seleccionar dados na BD SQLite
	$sql = "UPDATE cliente SET nome='".$_REQUEST['nome']."', morada='".$_REQUEST['morada']."', telefone='".$_REQUEST['telefone']."' WHERE num=".$_REQUEST['num'];
	if(!$bd->query($sql)) {
		echo 'Erro ao efectuar a query � BD.<br>';
	} else {
		header('Location: sqlite_ex3a.php');
	}
} else {
	// abre a Base de Dados SQLite
	$bd = new SQLiteDatabase("BaseDeDados.sqlite2");
	
	// seleccionar dados na BD SQLite
	$sql = "SELECT * FROM cliente WHERE num =".$_REQUEST['num'];
	if(!($result=$bd->query($sql))) {
		echo 'Erro ao efectuar a query � BD.<br>';
	} else {
		$row = $result->current();      
	}
	?>
	<html>
	<body>
	<font size=+2>Altera��o de um cliente</font><br>
	<form method="POST" action="sqlite_ex3a2.php">
	<table border=1>
	<tr>
	<td>Num:</td><td><input type="text" value="<? echo $row['num'];?>" name="num"></td>
	</tr>
	<tr>
	<td>Nome: </td><td><input type="text" value="<? echo $row['nome'];?>" name="nome"></td>
	</tr>
	<tr>
	<td>Morada: </td><td><input type="text" value="<? echo $row['morada'];?>" name="morada"></td>
	</tr>
	<tr>
	<td>Telefone: </td><td><input type="text" value="<? echo $row['telefone'];?>" name="telefone"></td>
	<input type="hidden" name="go" value="1">
	</tr>
	<tr>
	<td></td><td><input type="submit"></td>
	</tr>
	</table>
	</form>
<?
}
?>
