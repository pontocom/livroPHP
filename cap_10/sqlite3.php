<?php
#->Ligar ao SQLite
try {
$pdo = new PDO('sqlite2:'.'d:\sqlite\canil.sq2');
#-> vamos utilizar SQL fazendo uma declara��o para preparar uma selec��o de utilizadores:
$stmt = $pdo->prepare("select * from cachorros");
#->execu��o do comando SQL anterior
$stmt->execute();

#:: ap�s este comando  ent�o essa variavel $smmt j� cont�m v�rios registos 
#:: agora vamos criar um ciclo para extrair os registos
echo "Exemplifica��o de liga��o a BD (SQLite) com PDO";
echo "<table border=\"1\" width=\"80%\">";
while ($linha = $stmt->fetch())       // faz lembrar o sqlite_fetch_array();no PDO est� sendo representado como fetch
	{
    echo "<tr>";
    echo "<td>";
//	echo 	$num = $linha['num'];
    echo $linha[0];
    echo "</td><td>";
//	echo	 $nome = $linha['nome'];
    echo $linha[1];
    echo "</td><td>";
//	echo	$ra�a = $linha['ra�a'];
    echo $linha[2];
    echo "</td></tr><br>";
	}
	echo "</table>";
}

catch(Exception $e)
    {
    echo $e->getMessage();
    }

?>
