<!--Header-->
<?php
	require_once('inc/header.php');
?>


<div class="container">
	<div class="row">
		<div class="col-md-6 pt-5">
			<h1 class="text-dark pb-4">Listado de productos</h1>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3 ">
			<?php
				require_once('inc/filtros.php');
			?>
		</div>
		<div class="col-md-9 my-3">
			<!-- Lista  de productos general -->
			<?php
			include_once('inc/lista_productos_hardware.php');
			include_once('inc/lista_productos_software.php');
			include_once('inc/lista_productos_perifericos.php');
			?>
		</div>
	</div>
</div>


<!--Slide medios de pago-->

<?php
include_once('inc/slide_medios_de_pago.php');
?>


<!-- Footer -->
</div>
</div>
<?php
require_once('inc/footer.php');
?>



</html>