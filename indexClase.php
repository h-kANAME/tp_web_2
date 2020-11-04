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
	<div class="">
		<div class="row">
			<div class="">
				<div class="row">
				
				<?php
			$productos = json_decode(file_get_contents('productos.json') , true);
			foreach ($productos as $a_producto){
					if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) && 
				   ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))){

			}
	}

		foreach (   $productos as $a_producto) {

				$producto_id = $a_producto['id_producto'] ;
				$producto_modelo = $a_producto['modelo'] ;
				$producto_img =  $a_producto['imagen'];
				$producto_precio = $a_producto['precio'] ;

			$producto_marca = $a_marca['nombre'];
			$producto_categoria = $a_producto['id_categoria'];

?>
					<!-- Aca arranco con el tester -->
				

					<div class="col-md-4 card-body">
						<div class="card" style="width: 20rem;">
							<a href="producto_modelo.php?id_producto=<?php echo $producto_id ?>"><img class="card-img-top" alt="..."src="<?php echo $producto_img ?>"></a>

							<div class="card-body py-2">

								<h5 class="card-title">
									<a href="producto_modelo.php?id_producto=<?php echo $producto_id ?>"> <?php echo $producto_modelo ?></a>
								</h5>

								<h5><?php echo $producto_precio ?></h5>
								<h5><?php echo $a_marca['nombre'] ?></h5>
							</div>
						</div>
					</div>

					<?php } ?>

					<!-- Aca arranca el que esta funcionando -->
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