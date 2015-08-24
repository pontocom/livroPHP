
<?php
	// ler o documento XML do filesystem
	$ex1 = simplexml_load_file("lista.xml");
	
	
	// aceder directamente a um nome especifico
	echo "<b>Nome</b>:".$ex1->bi[0]->nome."<br><br>";

	// percorrer os v�rios BIs e escrever os nomes
	foreach ($ex1->bi as $mbi) {
		// permite-me que possa percorrer cada um dos elementos da estrutura
		echo "<b>Nome</b>:".$mbi->nome."<br>";
	}
	
	// escrever a data de emiss�o (atributo) e o arquivo de um BI espec�fico
	echo "Data de emiss�o: ".$ex1->bi[0]->arq_id['data_emissao']."</br>";
	
	echo "em: ".$ex1->bi[0]->arq_id."<br>";
		
?>
