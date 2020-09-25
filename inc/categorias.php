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
	'nombre' => 'Otros',
),

);

 $json_categorias = json_encode($categorias);
    $file = 'categorias.json';
    file_put_contents($file, $json_categorias);
?>