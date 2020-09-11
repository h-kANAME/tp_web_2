<!--Header-->
<?php
	require_once('inc/header.php');
?>

<div class="container">
		<div class="row">
					<div class="col-md-3">
								<?php
									require_once('inc/filtros.php');
							  ?>
			  	</div>
							<!--Carrousel-->
							<?php
									include_once('inc/carrousel.php');
							 ?>
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
