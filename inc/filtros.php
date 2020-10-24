<?php

include_once('inc/marcas.php');
include_once('inc/categorias.php');

$ESTA_PAG = 'index.php';

if (isset($_REQUEST['id_marca']))
    $id_marca = $_REQUEST['id_marca'];
else
    $id_marca = '';

if (isset($_REQUEST['id_categoria']))
    $id_categoria = $_REQUEST['id_categoria'];
else
		$id_categoria = ''; 

	//	$productos = json_decode(file_get_contents('productos.json'), true);
		$marcas = json_decode(file_get_contents('marcas.json'), true);
		$categorias = json_decode(file_get_contents('categorias.json'), true);

		//Funcion de filtrado

		echo '<ul>';
    echo '<li>';
    echo '<a href="'.$ESTA_PAG.'?id_marca=&id_categoria='.$id_categoria.'">Marcas</a><br>';
		echo '</li>';
	echo '<ul>';
	foreach ($marcas as $a_marca) {
		echo '<li>';
			echo '<a href="'.$ESTA_PAG .'?id_marca='. $a_marca['id_marca'].'&id_categoria='. $id_categoria .'">'. $a_marca['nombre']. '</a><br>';
				echo '</li>';
			};
	echo '</ul>';
	  echo '</ul>';


echo '<ul>';
    echo '<li>';
    echo '<a href="'.$ESTA_PAG.'?id_categoria=&id_marca='.$id_marca.'">Categorias</a><br>';
    echo '</li>';
        echo '<ul>';
foreach ($categorias as $a_categoria) {
            echo '<li>';
            echo '<a href="'.$ESTA_PAG .'?id_categoria='. $a_categoria['id_categoria'] . '&id_marca='. $id_marca .'">'. $a_categoria['nombre'].'</a><br>';
            echo '</li>';
        }
    
 $productos = json_decode(file_get_contents('productos.json'), true);
 foreach ($productos as $a_producto) {
     if (($a_producto['id_categoria'] == $id_categoria || $id_categoria =='')&&($a_producto['id_marca'] == $id_marca || $id_marca =='')){
						
						 echo '<pre>';
             print_r($a_producto);
             echo '</pre><hr>';
     }
 } 
?>


<!--
<div class="card mt-5">
	<div id="accordion-side-bar">
		<div class="card">
			<div class="card-header bg-dark" id="header-categorias" data-toggle="collapse" data-target="#collapse-categorias"
				aria-expanded="true" aria-controls="collapse-categorias">
				<h6 class="mb-0 colorSide">
					Categorias
				</h6>
			</div>
			<div id="collapse-categorias" class="collapse show" aria-labelledby="header-categorias"
				data-parent="#accordion-side-bar">
				<div class="card-body">
					<a href="hardware.php"><button type="button"
							class="list-group-item list-group-item-action">Hardware</button></a>
					<a href="software.php"><button type="button"
							class="list-group-item list-group-item-action">Software</button></a>
					<a href="perifericos.php"><button type="button"
							class="list-group-item list-group-item-action">Perifericos</button></a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header bg-dark" id="header-marcas" data-toggle="collapse" data-target="#collapse-marcas"
				aria-expanded="true" aria-controls="collapse-marcas">
				<h6 class="mb-0 colorSide">
					Marcas
				</h6>
			</div>
			<div id="collapse-marcas" class="collapse show" aria-labelledby="header-marcas" data-parent="#accordion-side-bar">
				<div class="card-body">
					<a href="software.php"><button type="button"
							class="list-group-item list-group-item-action">Windows</button></a>
					<a href="software.php"><button type="button" class="list-group-item list-group-item-action">Adobe</button></a>
					<a href="hardware.php"><button type="button" class="list-group-item list-group-item-action">HyperX
							Savage</button></a>
					<a href="hardware.php"><button type="button" class="list-group-item list-group-item-action">WB
							Blue</button></a>
					<a href="hardware.php"><button type="button"
							class="list-group-item list-group-item-action">Crucial</button></a>
					<a href="hardware.php"><button type="button"
							class="list-group-item list-group-item-action">Corsair</button></a>
					<a href="hardware.php"><button type="button" class="list-group-item list-group-item-action">AMD</button></a>
					<a href="hardware.php"><button type="button"
							class="list-group-item list-group-item-action">GIGABYTE</button></a>
					<a href="perifericos.php"><button type="button"
							class="list-group-item list-group-item-action">Logitech</button></a>
					<a href="perifericos.php"><button type="button"
							class="list-group-item list-group-item-action">SteelSeries</button></a>
					<a href="perifericos.php"><button type="button"
							class="list-group-item list-group-item-action">ZOWIE</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
-->