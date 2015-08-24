<?php
#->Ligar ao mysql
try {
$pdo = new PDO("mysql:host=localhost; dbname=testedb", "root", "");
#-> vamos utilizar SQL fazendo uma declara��o para preparar uma selec��o de utilizadores:
$stmt = $pdo->prepare("select * from teste");

#->execu��o do comando SQL anterior
$stmt->execute();

#:: ap�s este comando  ent�o essa variavel $smtmt j� cont�m v�rios registos 
#:: agora vamos criar um ciclo para extrair os registos
echo "Exemplifica��o de liga��o a BD (MySQL) com PDO";
echo "<table border=\"1\" width=\"80%\">";
while ($row = $stmt->fetch())       // faz lembrar o mysql_fetch_array();no PDO est� sendo representado como fetch
	{
    echo "<tr>";
    echo "<td>";
    $nome = $row['nome'];
    echo $nome;
    //echo "</td><td>";
    //$email = $row['email'];
    //echo $email;
    echo "</td><td>";
    $telefone = $row['telefone'];
    echo $telefone;
    echo "</td></tr><br>";
	}
echo "</table>";
}

catch(Exception $e)
    {
    echo $e->getMessage();
    }

?>
