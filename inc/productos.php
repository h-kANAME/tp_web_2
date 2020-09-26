<?php
$productos = array(
	0 => array (
		'destacado' => true,
		'id' => 0,
		'nombre' => 'Disco SSD 120 GB',
		'categoria' => 1,
		'marca' => 1,
		'descripcion' => 'Disco en estado solido de interface SerialATA III, con 560MB/s de velocidad de lectura lectura y 360MB/s de escritura',
		'precio' => 3157,
),

1 => array (
		'destacado' => true,
		'id' => 1,
		'nombre' => 'Disco SSD 120 GB',
		'categoria' => 1,
		'marca' => 2,
		'descripcion' => 'Disco en estado solido de interface SerialATA III, con 545 MB/s de velocidad de lectura lectura y 525 MB/s de escritura',
		'precio' => 4760,
),

2 => array (
		'destacado' => false,
		'id' => 2,
		'nombre' => 'Memoria DDR4 2666 Mhz - 4GB',
		'categoria' => 1,
		'marca' => 3,
		'descripcion' => 'Memoria con factor de forma UDIMM, la mejor opcion a la hora de buscar un producto confiable y a un precio competitivo',
		'precio' => 2146,
),

3 => array (
		'destacado' => false,
		'id' => 3,
		'nombre' => 'Memoria DDR4 3000 Mhz - 8GB',
		'categoria' => 1,
		'marca' => 4,
		'descripcion' => 'Velocidad de 2666MHz a 4600MHz y compatible con las plataformas Intel® X299 2666MHz y AMD AM4 / Ryzen',
		'precio' => 4637,
),

4 => array (
		'destacado' => false,
		'id' => 4,
		'nombre' => 'Micro Procesador RYZEN 3 3200G',
		'categoria' => 1,
		'marca' => 5,
		'descripcion' => 'Incorpora graficos Radeon Vega 8 el 3200G llega y ofrece 4 CPU fisicos y 4 Virtuales, capaces de alcanzar velocidades de  hasta 4GHz',
		'precio' => 13158,
),

5 => array (
		'destacado' => false,
		'id' => 5,
		'nombre' => 'Micro Procesador RYZEN 5 3400G',
		'categoria' => 1,
		'marca' => 5,
		'descripcion' => 'Es capaz de soportar hasta una temperatura de 95ºc, ofrece 4 CPU fisicos y 8 Viruales, capaces de alcanzar velocidades de hasta 4,2GHz',
		'precio' => 17053,
),

6 => array (
		'destacado' => false,
		'id' => 6,
		'nombre' => 'Micro Procesador RYZEN 7 3700X',
		'categoria' => 1,
		'marca' => 5,
		'descripcion' => 'Microprocersador de alto rendimiento, ofrece 8CPU fisicos y 16 Virtuales, capaz de alcazar velocidades de hasta 4,4GHz',
		'precio' => 44719,
),

7 => array (
		'destacado' => false,
		'id' => 7,
		'nombre' => 'Placa de Video RADEON RX 5600 XT',
		'categoria' => 1,
		'marca' => 6,
		'descripcion' => 'Tipo de memoria  GDDR6 con 6GB de memoria y Boos Clok de hasta 1620MHz',
		'precio' => 51308,
),

);

 $json_productos = json_encode($productos);
    $file = 'productos.json';
    file_put_contents($file, $json_productos);
?>