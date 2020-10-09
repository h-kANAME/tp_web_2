<?php
$marcas = array(
	
1 => array (
	'id_marca' => 1,
	'nombre' => 'HYPERX SAVAGE',
),

2 => array (
	'id_marca' => 2,
	'nombre' => 'WD BLUE',
),

3 => array (
	'id_marca' => 3,
	'nombre' => 'CRUCIAL',
),

4 => array (
	'id_marca' => 4,
	'nombre' => 'CORSAIR',
),

5 => array (
	'id_marca' => 5,
	'nombre' => 'AMD',
),

6 => array (
	'id_marca' => 6,
	'nombre' => 'GIGABYTE ',
),
//SOFTWARE//
7 => array (
	'id_marca' => 7,
	'nombre' => 'ADOBE',
),
8 => array (
	'id_marca' => 8,
	'nombre' => 'WINDOWS',
),
//PERIFERICOS//
9 => array (
	'id_marca' => 9,
	'nombre' => 'LOGITECH',
),
10 => array (
	'id_marca' => 10,
	'nombre' => 'ZOWIE',
),
11 => array (
	'id_marca' => 11,
	'nombre' => 'SteelSeries'
),
);

file_put_contents('marcas.json', json_encode($marcas));

?>