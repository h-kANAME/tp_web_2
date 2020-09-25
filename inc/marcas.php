<?php
$marcas = array(
	
	0 => array (
		'id_marca' => '1',
		'nombre' => 'HYPERX SAVAGE',
),

1 => array (
	'id_marca' => '2',
	'nombre' => 'WB BLUE',
),

2 => array (
	'id_marca' => '3',
	'nombre' => 'CRUCIAL',
),

3 => array (
	'id_marca' => '4',
	'nombre' => 'CORSAIR',
),

4 => array (
	'id_marca' => '5',
	'nombre' => 'AMD',
),

5 => array (
	'id_marca' => '6',
	'nombre' => 'GIGABYTE ',
),


);

 $json_marcas = json_encode($marcas);
    $file = 'marcas.json';
    file_put_contents($file, $json_marcas);
?>