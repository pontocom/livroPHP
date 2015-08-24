<?php


// include the ADODB library
include("d:/xampp/xampp/xampp/adodb/adodb.inc.php");

// cria��o de uma inst�ncia para o Objecto de liga��o MySQL
$db = NewADOConnection("mysql");

// abrir a liga��o � base de dados
$db->Connect("localhost", "root", "", "testedb") or die("imposs�vel ligar � base de dados!");

// execute query
$query = "SELECT * FROM teste";
$result = $db->Execute($query) or die("Erro ao interrogar a BD: $query. " . $db->ErrorMsg());

// In�cio de processo iterat�vo
// impress�o dos registos no formato NOME - TELEFONE
$numlinhas =$result->RecordCount();
$numcampos=$result->Fieldcount();
echo "N�mero de registos:" .$numlinhas. "<p>";
echo "N�mero de campos por registo:" .$numcampos. "<p>";
$result->MoveFirst();        /*      opcional mas recomendado     */
echo "<table border=\"1\" width=\"100%\">";
while (!$result->EOF)
{
	//pode ser tb esta linha
    //echo $result->fields[1] . " - " . $result->fields[2] . "<p>";
	echo "<tr>";
    echo "<td>";
    echo $result->fields['nome'] . "</td><td> " . $result->fields['telefone']. "</td></tr><p>";
  	$result->MoveNext();
}
echo "</table>";
// Imprimir n�mero de registos do resultado
echo "[total de registos]\n - [". $result->RecordCount()."\n]";

// fecho da liga��o � BD
$db->Close();

?>
