<?php
	require_once('inc/header.php');
	require_once('inc/productos.php');
	require_once('inc/marcas.php');
	require_once('inc/categorias.php');
?>

<div class="container">
	<div class="row">
		<div class="col md-12 my-4 ">
<?php
include_once ('inc/carrousel.php');
?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col -md-4">
			<?php

if (isset($_REQUEST['id_marca']))
$id_marca = $_REQUEST['id_marca'];
else $id_marca = array();

if (isset($_REQUEST['id_categoria'])) 
$id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();

$marcas = json_decode(file_get_contents('marcas.json') , true);
$categorias = json_decode(file_get_contents('categorias.json') , true);

include_once('inc/productos.php');
$productos = json_decode(file_get_contents('productos.json'), true);
?>


<?php
echo '<form action="" method="get">';
echo '<ul>';
echo '<li>';
echo 'Marcas<br>';
echo '</li>';
echo '<ul>';

foreach ($marcas as $a_marca)
{
    if (in_array($a_marca['id_marca'], $id_marca)) $checkar = 'checked="chequed"';
    else $checkar = '';

    echo '<li>';
    echo '<input onChange="this.form.submit()" type="checkbox" name="id_marca[]" value = "' . $a_marca['id_marca'] . '"' . $checkar . '>' . $a_marca['nombre'];
    echo '</li>';
};
echo '</ul>';
echo '</ul>';

echo '<ul>';
echo '<li>';
echo 'Categorias<br>';
echo '</li>';
echo '<ul>';

foreach ($categorias as $a_categoria)
{
    if (in_array($a_categoria['id_categoria'], $id_categoria)) $checked = 'checked="chequed"';
    else $checked = '';
    echo '<li>';
    echo '<input onChange="this.form.submit()" type="checkbox" name="id_categoria[]" value = "' . $a_categoria['id_categoria'] . '" ' . $checked . '>' . $a_categoria['nombre'];
    echo '</li>';
}
echo '</ul>';
echo '</ul>';
?>

		</div>
		<div class="row">
			<div class="col">
				<?php
include_once ('inc/destacados.php');
?>
			</div>
		</div>
	</div>

</div> <!-- Cierra container filtros/destacados -->


<div class="container">
	<div class="col -md-12">
<?php
echo '<hr><pre>';
?>
		<div class="row">
				<div class="col md-3">
							
				<div class="row">
        <?php
				$productos = json_decode(file_get_contents('productos.json') , true);
				foreach ($productos as $a_producto){
					if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) && 
					   ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))){

							
						echo '<div class="col-md-4 card-body">';

				    echo '<div class="card" style="width: 25;">';
					
						echo '<div class="card text-center">';

						echo '<img src="' . $a_producto['imagen'] . '" class="card-img-top"  alt="' . $a_producto['modelo'] . '">';

						echo '<div class="card-body">';

						echo '<h5 class="card-title">' . $a_producto['modelo'] . '</h5>';
						
						echo '<h6 class="card-text">' . '$' . $a_producto['precio'] . '</h6>';

					//	echo '<p class="card-text">' . $a_producto['descripcion'] . '</p>';
						
						echo '<div class="btn-group">';
						echo '<a href="producto_modelo.php?id_producto=' . $a_producto['id_producto'] . '" class="btn btn-dark">Detalles</a>';

					
						echo '</div>'; // Card body
						echo '</div>'; // Style width 25

						echo '</div>';
						echo '</div>';
						echo '</div>';

/*					
					<div class="col-md-4 card-body">
						<div class="card" style="width: 13rem;">

							<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg"
								class="card-img-top" alt="...">

							<div class="card-body">
								<p class="card-text">Producto</p>
								<p class="card-text">ARS 1.000</p>
								<p class="card-text">Comemtario</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="producto_modelo.php"><button type="button" class="btn btn-dark">Detalles</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>

*/			




				}
		}
?>
						</div>
				</div>
			</div>

	</div>
</div>

<!-- Productos con formato inicio -->

<!-- Productos con formato cierre -->

<!-- Slide Banner -->

<?php
//include_once('inc/slide.php');

?>


<!-- Lista  

<div class="container">
	<div class="row">
		<div class="col -12">
			<h1 class="text-center">Hardware</h1>
		</div>
	</div>
</div>

Hardware -->

<?php
//include_once('inc/lista_productos_hardware.php');

?>

<!--Slide medios de pago-->

<?php
//include_once('inc/slide_medios_de_pago.php');

?>

<!--Lista productos 

<div class="container">
	<div class="row">
		<div class="col -12">
			<h2 class="text-center">Software</h2>
		</div>
	</div>
</div>

Software-->
<?php
//include_once('inc/lista_productos_software.php');

?>


<?php
//include_once('inc/slide.php');

?>

<!-- Lista  

<div class="container">
	<div class="row">
		<div class="col -12">
			<h1 class="text-center">Perifericos</h1>
		</div>
	</div>
</div>

Perifericos -->

<?php
//include_once('inc/lista_productos_perifericos.php');

?>


<!-- Footer -->

<?php
require_once ('inc/footer.php');
?>



</html>