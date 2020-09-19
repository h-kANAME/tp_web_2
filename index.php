<!--Header-->
<?php
	require_once('inc/barra_navegacion.php');
?>
								<div class="p-5 mx-5">
								<?php
									include_once('inc/carrousel.php');
							 		?>
								</div>
									

<div class="container">
		<div class="row">

							<div class="col-md-6 x-6">
									<?php
									require_once('inc/filtros.php');
							  		?>
							</div>
							<div class="col-md-6 pt-5">
							<header>
        						<h1 class="text-dark text-center pb-4">Tecnologia BER</h1>
        					</header>
							</div>
		</div>
</div>



<!--Destacados-->

<?php
	include_once('inc/destacados.php');
?>

<!-- Slide Banner -->

<?php
include_once('inc/slide.php');
?>

<!-- Lista productos Hardware -->

<?php
include_once('inc/lista_productos_hardware.php');
?>

<!--Slide medios de pago-->

<?php
include_once('inc/slide_medios_de_pago.php');
?>

<!--Lista productos Software-->

<?php
include_once('inc/lista_productos_software.php');
?>

<!-- Footer -->
<?php
require_once('inc/footer.php');
?>



</html>
