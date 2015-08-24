<?php
//http://devzone.zend.com/node/view/id/1113
if (!filter_has_var(INPUT_POST, 'submit')) {
    echo "vari�veis tipo POST provenientes de formul�rio <p>";
    // include the form.
}
 
$filtro = array (
    'nome'       => array('filter'=>FILTER_SANITIZE_STRING,'flags' => FILTER_FLAG_ENCODE_HIGH|FILTER_FLAG_ENCODE_LOW),
    'email'      => FILTER_VALIDATE_EMAIL,
    'homepage'   => FILTER_VALIDATE_URL,
    'idade'        => array(  'filter' => FILTER_VALIDATE_INT,'options'=> array('min_range'=>16, 'max_range'=>95)),
    'vencimento'     => FILTER_VALIDATE_FLOAT,
    'favoritos' => array('filter' => FILTER_SANITIZE_STRING,'flags'  => FILTER_REQUIRE_ARRAY),
);
//aplicar o filtro �s vari�veis da array
$input = filter_input_array(INPUT_POST, $filtro);
//ver o conteudo das vari�veis no  array
var_dump($input); 
echo ("<p>----- <p>");

if ($input['email']===FALSE) {
	exit ("formato email inv�lido");
}

if ($input['homepage']===FALSE) {
	exit ("formatoURL inv�lido");
}

if ($input['idade'] === FALSE) {
exit("You must be between 7 and 77 years old.");
}
 
if (is_null($input['favoritos'])) {
 exit("Deve escolher uma ou mais linguagens.");
}
 
if (!in_array('PHP', $input['favoritos'])) {
exit("Pois ... n�o gosta de PHP!");
} else {
echo ("Pois ... gosta de PHP");	
} 
?>

