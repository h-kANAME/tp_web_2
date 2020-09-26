<!--Header-->
<?php
	require_once('inc/header.php');
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

<!-- Lista productos Hardware -->

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

<!-- Footer -->
</div>
</div>
<?php
require_once('inc/footer.php');
?>



</html>