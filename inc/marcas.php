<?php
$marcas = array(
	
	0 => array (
		'id_marca' => '1',
		'nombre' => 'Asus',
),

1 => array (
	'id_marca' => '2',
	'nombre' => 'Msi',
),

2 => array (
	'id_marca' => '3',
	'nombre' => 'Gigabyte',
),


);

 $json_marcas = json_encode($marcas);
    $file = 'marcas.json';
    file_put_contents($file, $json_marcas);
?>