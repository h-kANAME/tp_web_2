<?php
$productos = array(
	0 => array (
		'destacado' => true,
		'id' => 0,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

1 => array (
		'destacado' => true,
		'id' => 1,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

2 => array (
		'destacado' => true,
		'id' => 2,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

3 => array (
		'destacado' => false,
		'id' => 3,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

4 => array (
		'destacado' => false,
		'id' => 4,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

5 => array (
		'destacado' => false,
		'id' => 5,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

6 => array (
		'destacado' => false,
		'id' => 6,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

7 => array (
		'destacado' => false,
		'id' => 7,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

8 => array (
		'destacado' => false,
		'id' => 8,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

9 => array (
		'destacado' => false,
		'id' => 9,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

10 => array (
		'destacado' => false,
		'id' => 10,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

11 => array (
		'destacado' => false,
		'id' => 11,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

12 => array (
		'destacado' => false,
		'id' => 12,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

13 => array (
		'destacado' => false,
		'id' => 13,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

14 => array (
		'destacado' => false,
		'id' => 14,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

15 => array (
		'destacado' => false,
		'id' => 15,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

16 => array (
		'destacado' => false,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

17 => array (
		'destacado' => false,
		'id' => 17,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),

18 => array (
		'destacado' => false,
		'id' => 18,
		'nombre' => 'Disco SSD',
		'categoria' => 'Hardware',
		'marca' => 'Kingston',
		'descripcion' => 'Descripcion del producto',
		'precio' => 1000,
),
19 => array (
	'destacado' => false,
	'id' => 18,
	'nombre' => 'Disco SSD',
	'categoria' => 'Hardware',
	'marca' => 'Kingston',
	'descripcion' => 'Descripcion del producto',
	'precio' => 1000,
),

);

 $json_productos = json_encode($productos);
    $file = 'productos.json';
    file_put_contents($file, $json_productos);
?>