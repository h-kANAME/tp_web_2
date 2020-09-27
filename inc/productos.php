<html>
<?php
	

    	$productos = array(
			//HardWare 1 categoria 2 marcas 4 productos
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
		   //SoftWare 1 categoria 2 marcas 4 productos
		   8 => array (
			'id_producto' => 9,
			'descripcion' => 'Funciones del software: Editor de Imagen',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Illustrator',
			'destacado' => true,
			'precio' => 10000,
		   ),
		   9 => array (
			'id_producto' => 10,
			'descripcion' => 'Platonic: Con tonos azul oscuro y sombras naranja oscuro.',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Lightroom',
			'destacado' => true,
			'precio' => 8000,
		   ),
		   10 => array (
			'id_producto' => 11,
			'descripcion' => 'El Curso Diseño Grafico Multimedia es para PC/ MAC, y no requiere de ninguna instalacion! solo coloca el disco y listo!',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'InDesign',
			'destacado' => false,
			'precio' => 5000,
		   ),
		   11 => array (
			'id_producto' => 12,
			'descripcion' => 'Excelente programa de diseño para aquella personas que se inician
			recientemente en la edición de imágenes y creación de diseños.',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Photoshop',
			'destacado' => false,
			'precio' => 1500,
		   ),
		   12 => array (
			'id_producto' => 13,
			'descripcion' => 'Tipo de sistema operativo: 2020',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Windows 10 Pro',
			'destacado' => false,
			'precio' => 37000,
		   ),
		   13 => array (
			'id_producto' => 14,
			'descripcion' => 'Enterprise Development with Visual Studio .NET, UML, and MSF',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Visual Studio Enterprise',
			'destacado' => false,
			'precio' => 5000,
		   ),
		   14 => array (
			'id_producto' => 15,
			'descripcion' => 'XBOX GAME PASS + GOLD 30 DÍAS
			100 % original Xbox One, tenemos stock permanente ofertar sin problemas.',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'xbox live gold',
			'destacado' => false,
			'precio' => 13000,
		   ),
		   15 => array (
			'id_producto' => 16,
			'descripcion' => 'Office 365 professional plus',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Microsoft 365',
			'destacado' => false,
			'precio' => 8000,
		   ),
		   //Perifericos 1 categoria 2 marcas 4 productos
		   16 => array (
			'id_producto' => 17,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   17 => array (
			'id_producto' => 18,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   18 => array (
			'id_producto' => 19,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   19 => array (
			'id_producto' => 20,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   20 => array (
			'id_producto' => 21,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   21 => array (
			'id_producto' => 22,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   22 => array (
			'id_producto' => 23,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),
		   23 => array (
			'id_producto' => 24,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,
			'precio' => 1000,
		   ),

);

$json_productos = json_encode($productos);
$fp = 'productos.json';
file_put_contents($fp, $json_productos);
?>

</html>