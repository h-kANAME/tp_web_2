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
//SOFTWARE//
6 => array (
	'id_marca' => '7',
	'nombre' => 'ADOBE',
),
7 => array (
	'id_marca' => '8',
	'nombre' => 'WINDOWS',
),

);

 $json_marcas = json_encode($marcas);
    $fp = 'marcas.json';
    file_put_contents($fp, $json_marcas);
?>