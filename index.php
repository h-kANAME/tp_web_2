<!--Header-->
<?php
	require_once('inc/header.php');
?>

<?php
include_once('inc/productos.php');
$fp = fopen('productos.json','w');
fwrite($fp, json_encode($productos));
fclose($fp);
?>

<?php
include_once('inc/marcas.php');
$fp = fopen('marcas.json','w');
fwrite($fp, json_encode($marcas));
fclose($fp);
?>

<?php
include_once('inc/categorias.php');
$fp = fopen('categorias.json','w');
fwrite($fp, json_encode($categorias));
fclose($fp);
?>

<?php
include_once('inc/comentarios.php');
$fp = fopen('comentarios.json','w');
fwrite($fp, json_encode($comentarios));
fclose($fp);
?>


<div class="container">
	<div class="row">
		<div class="col-md-6 pt-5">
			<header>
				<h1 class="text-dark pb-4">Tecnologia BER</h1>
			</header>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col md-12 my-4 ">
			<?php
			include_once('inc/carrousel.php');
			?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 ">
			<?php
				require_once('inc/filtros.php');
			?>
		</div>
		<div class="col -md-8">
			<?php
			include_once('inc/destacados.php');
			?>
		</div>
	</div>
</div>

<!-- Slide Banner -->

<?php
include_once('inc/slide.php');
?>

<!-- Lista  Hardware -->

<div class="container">
	<div class="row">
		<div class="col -12">
			<h1 class="text-center">Hardware</h1>
		</div>
	</div>
</div>

<?php
include_once('inc/lista_productos_hardware.php');
?>

<!--Slide medios de pago-->

<?php
include_once('inc/slide_medios_de_pago.php');
?>

<!--Lista productos Software-->

<div class="container">
	<div class="row">
		<div class="col -12">
			<h2 class="text-center">Software</h2>
		</div>
	</div>
</div>

<?php
include_once('inc/lista_productos_software.php');
?>


<?php
include_once('inc/slide.php');
?>

<!-- Lista  Perifericos -->

<div class="container">
	<div class="row">
		<div class="col -12">
			<h1 class="text-center">Perifericos</h1>
		</div>
	</div>
</div>

<?php
include_once('inc/lista_productos_perifericos.php');
?>


<!-- Footer -->
</div>
</div>
<?php
require_once('inc/footer.php');
?>



</html>