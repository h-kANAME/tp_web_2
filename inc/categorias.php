<?php
$categorias = array(
	
	0 => array (
		'id_categoria' => '1',
		'nombre' => 'Almacenamiento',
),

1 => array (
	'id_categoria' => '2',
	'nombre' => 'Almacenamiento',
),

2 => array (
	'id_categoria' => '3',
	'nombre' => 'Almacenamiento',
),

3 => array (
	'id_categoria' => '4',
	'nombre' => 'Almacenamiento',
),

4 => array (
	'id_categoria' => '5',
	'nombre' => 'Almacenamiento',
),


);

 $json_categorias = json_encode($categorias);
    $file = 'categorias.json';
    file_put_contents($file, $json_categorias);
?>