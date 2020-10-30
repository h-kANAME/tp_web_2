<?php

    	$productos = array(
			//HardWare 1 categoria 2 marcas 4 productos
			1 => array (
			'id_producto' => 1,
			'descripcion' => 'Disco en estado solido, productoo de interface SerialATA III con 560MB/s de velocidad de lectura lectura y 360MB/s de escritura',
			'id_marca' => 1,
			'id_categoria' => 1,
			'modelo' => 'Disco SSD 120 GB',
			'destacado' => true,
			'precio' => 3157,
			'imagen' => "img/Hardware/0.jpg",
		),
		
		2 => array (
			'id_producto' => 2,
			'descripcion' => 'Disco en estado solido de interface SerialATA III, con 545 MB/s de velocidad de lectura lectura y 525 MB/s de escritura',
			'id_marca' => 2,
			'id_categoria' => 1,
			'modelo' => 'Disco SSD 120 GB',
			'destacado' => false,
			'precio' => 4760,
			'imagen' => "img/Hardware/1.jpg",
		),
		
		3 => array (
			'id_producto' => 3,
			'descripcion' => 'Memoria con factor de forma UDIMM, la mejor opcion a la hora de buscar un producto confiable y a un precio competitivo',
			'id_marca' => 3,
			'id_categoria' => 1,
			'modelo' => 'Memoria DDR4 2666 Mhz - 4GB',
			'destacado' => false,
			'precio' => 2146,
			'imagen' => "img/Hardware/2.jpg",
		),
		
		4 => array (
			'id_producto' => 4,
			'descripcion' => 'Velocidad de 2666MHz a 4600MHz y compatible con las plataformas Intel® X299 2666MHz y AMD AM4 / Ryzen',
			'id_marca' => 4,
			'id_categoria' => 1,
			'modelo' => 'Memoria DDR4 3000 Mhz - 8GB',
			'destacado' => false,
			'precio' => 4637,
			'imagen' => "img/Hardware/3.jpg",
		),
		
		5 => array (
			'id_producto' => 5,
			'descripcion' => 'Incorpora graficos Radeon Vega 8 el 3200G llega y ofrece 4 CPU fisicos y 4 Virtuales, capaces de alcanzar velocidades de  hasta 4GHz',
			'id_marca' => 5,
			'id_categoria' => 1,
			'modelo' => 'Micro Procesador RYZEN 3 3200G',
			'destacado' => false,
			'precio' => 13158,
			'imagen' => "img/Hardware/4.jpg",
		),
		
		6 => array (
			'id_producto' => 6,
			'descripcion' => 'Es capaz de soportar hasta una temperatura de 95ºc, ofrece 4 CPU fisicos y 8 Viruales, capaces de alcanzar velocidades de hasta 4,2GHz',
			'id_marca' => 5,
			'id_categoria' => 1,
			'modelo' => 'Micro Procesador RYZEN 5 3400G',
			'destacado' => true,
			'precio' => 17053,
			'imagen' => "img/Hardware/5.jpg",
		),
		
		7 => array (
			'id_producto' => 7,
			'descripcion' => 'Microprocersador de alto rendimiento, ofrece 8CPU fisicos y 16 Virtuales, capaz de alcazar velocidades de hasta 4,4GHz',
			'id_marca' => 5,
			'id_categoria' => 1,
			'modelo' => 'Micro Procesador RYZEN 7 3700X',
			'destacado' => false,
			'precio' => 44719,
			'imagen' => "img/Hardware/6.jpg",
		),
		
		8 => array (
			'id_producto' => 8,
			'descripcion' => 'Tipo de memoria  GDDR6 con 6GB de memoria y Boos Clok de hasta 1620MHz',
			'id_marca' => 6,
			'id_categoria' => 1,
			'modelo' => 'Placa de Video RADEON RX 5600 XT',
			'destacado' => false,
			'precio' => 51308,
			'imagen' => "img/Hardware/7.jpg",
		),
		   //SoftWare 1 categoria 2 marcas 4 productos
		   9 => array (
			'id_producto' => 9,
			'descripcion' => 'Funciones del software: Editor de Imagen',
			'id_marca' =>  7,
			'id_categoria' => 2,
			'modelo' => 'Illustrator',
			'destacado' => false,
			'precio' => 10000,
			'imagen' => "img/Software/8.png",
		   ),
		   10 => array (
			'id_producto' => 10,
			'descripcion' => 'Platonic: Con tonos azul oscuro y sombras naranja oscuro.',
			'id_marca' =>  7,
			'id_categoria' => 2,
			'modelo' => 'Lightroom',
			'destacado' => false,
			'precio' => 8000,
			'imagen' => "img/Software/10.png",
		   ),
		   11 => array (
			'id_producto' => 11,
			'descripcion' => 'El Curso Diseño Grafico Multimedia es para PC/ MAC, y no requiere de ninguna instalacion! solo coloca el disco y listo!',
			'id_marca' =>  7,
			'id_categoria' => 2,
			'modelo' => 'InDesign',
			'destacado' => false,
			'precio' => 5000,
			'imagen' => "img/Software/9.png",
		   ),
		   12 => array (
			'id_producto' => 12,
			'descripcion' => 'Excelente programa de diseño para aquella personas que se inician
			recientemente en la edición de imágenes y creación de diseños.',
			'id_marca' =>  7,
			'id_categoria' => 2,
			'modelo' => 'Photoshop',
			'destacado' => false,
			'precio' => 1500,
			'imagen' => "img/Software/11.png",
		   ),
		   13 => array (
			'id_producto' => 13,
			'descripcion' => 'Tipo de sistema operativo: 2020',
			'id_marca' =>  8,
			'id_categoria' => 2,
			'modelo' => 'Windows 10 Pro',
			'destacado' => false,
			'precio' => 37000,
			'imagen' => "img/Software/14.jpg",
		   ),
		   14 => array (
			'id_producto' => 14,
			'descripcion' => 'Enterprise Development with Visual Studio .NET, UML, and MSF',
			'id_marca' =>  8,
			'id_categoria' => 2,
			'modelo' => 'Visual Studio Enterprise',
			'destacado' => false,
			'precio' => 5000,
			'imagen' => "img/Software/13.jpg",
		   ),
		   15 => array (
			'id_producto' => 15,
			'descripcion' => 'XBOX GAME PASS + GOLD 30 DÍAS
		 	100 % original Xbox One, tenemos stock permanente ofertar sin problemas.',
			'id_marca' =>  8,
			'id_categoria' => 2,
			'modelo' => 'xbox live gold',
			'destacado' => false,
			'precio' => 13000,
			'imagen' => "img/Software/15.png",
		   ),
		   16 => array (
			'id_producto' => 16,
			'descripcion' => 'Office 365 professional plus',
			'id_marca' =>  8,
			'id_categoria' => 2,
			'modelo' => 'Microsoft 365',
			'destacado' => false,
			'precio' => 8000,
			'imagen' => "img/Software/12.jpg",
		   ),
		   //Perifericos 1 categoria 2 marcas 4 productos
		   17 => array (
			'id_producto' => 17,
			'descripcion' => 'Audífonos con micrófono PRO X para juegos, incorporta la tecnologia Blue Voice',
			'id_marca' =>  9,
			'id_categoria' => 3,
			'modelo'=> 'Logitech G Pro X',
			'destacado' => true,
			'precio' => 34000,
			'imagen' => "img/Perifericos/16.jpg",
		   ),
		   18 => array (
			'id_producto' => 18,
			'modelo'=>'HyperX Cloud II Gaming Headset',
			'descripcion' => 'Audifonos Cloud con sonido envolvente 7.1 y con microfono con cancelacion de ruido',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'destacado' => false,
			'precio' => 20000,
			'imagen' => "img/Perifericos/17.jpg",
		   ),
		   19 => array (
			'id_producto' => 19,
			'descripcion' => 'Mouse óptico ideal para viedojuegos, cuenta con el sensor Pixart pmw 3360',
			'id_marca' =>  10,
			'id_categoria' => 3,
			'modelo'=> 'Zowie Gear FK2 Wired',
			'destacado' => false,
			'precio' => 12250,
			'imagen' => "img/Perifericos/18.jpg",
		   ),
		   20 => array (
			'id_producto' => 20,
			'descripcion' => 'Diseño Ergonómico exclusivamente para usuarios diestros',
			'id_marca' =>  10,
			'id_categoria' => 3,
			'modelo'=> 'Zowie Gear ZA11 Wired',
			'destacado' => false,
			'precio' => 13000,
			'imagen' => "img/Perifericos/19.jpg",
		   ),
		   21 => array (
			'id_producto' => 21,
			'descripcion' => 'Alfombrilla de ratón Logitech G240 de tela para juegos para juegos de bajo DPI',
			'id_marca' =>  9,
			'id_categoria' => 3,
			'modelo'=> 'Logitech G240 ',
			'destacado' => false,
			'precio' => 3500,
			'imagen' => "img/Perifericos/20.jpg",
		   ),
		   22 => array (
			'id_producto' => 22,
			'descripcion' => 'FURY S cuenta con bordes con costura uniforme antidesgaste para una mayor resistencia.',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo'=> 'HyperX Fury S L',
			'destacado' => false,
			'precio' => 3799,
			'imagen' => "img/Perifericos/21.jpg",
		   ),
		   23 => array (
			'id_producto' => 23,
			'descripcion' => 'G915 TKL dispone de las mismas tecnologías avanzadas que G915 (pero en un diseño más compacto, que ofrece más espacio para el movimiento del mouse). 
			El receptor USB se puede guardar en la parte posterior del teclado para facilitar el transporte.',
			'id_marca' =>  9,
			'id_categoria' => 3,
			'modelo'=> 'Logitech G915 Mechanical Gaming Keyboard',
			'destacado' => false,
			'precio' => 29500,
			'imagen' => "img/Perifericos/22.jpg",
		   ),
		   24 => array (
			'id_producto' => 24,
			'descripcion' => 'Interruptores rojos lineales: garantizados para 50 millones de pulsaciones de teclas, los interruptores rojos proporcionan un movimiento uniforme y uniforme sin ningún golpe.',
			'id_marca' => 11,
			'id_categoria' => 3,
			'modelo'=> 'SteelSeries Apex 7 Mechanical Gaming Keyboard',
			'destacado' => false,
			'precio' => 42000,
			'imagen' => "img/Perifericos/23.jpg",
		   ),

);

//file_put_contents('productos.json', json_encode($productos));

$puntero = fopen("productos.json", "w");

$productosJSON = json_encode($productos);

fwrite($puntero,$productosJSON,strlen($productosJSON));

fclose($puntero);


?>
