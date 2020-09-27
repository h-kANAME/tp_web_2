<?php
$categorias = array(
	
	0 => array (
		'id_categoria' => '1',
		'nombre' => 'Hardware',
),

1 => array (
	'id_categoria' => '2',
	'nombre' => 'Software',
),

2 => array (
	'id_categoria' => '3',
	'nombre' => 'Perifericos',
),

);

 $json_categorias = json_encode($categorias);
    $fp = 'categorias.json';
    file_put_contents($fp, $json_categorias);
?>