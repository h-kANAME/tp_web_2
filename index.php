<!--Header-->
<?php
	require_once('inc/header.php');
?>
<!--Pausa mental-->

<body class="bg-dark">
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

<!--Inicia Destacados-->


<div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 card-body">
						<div class="card" style="width: 18rem;">
							<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="/html/prod_almacenamiento_uno.html"><button type="button"
												class="btn btn-sm btn-outline-secondary">Detalles</button></a>
									</div>
									<small class="text-muted">Comentario</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 card-body">
						<div class="card" style="width: 18rem;">
							<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="/html/prod_almacenamiento_uno.html"><button type="button"
												class="btn btn-sm btn-outline-secondary">Detalles</button></a>
									</div>
									<small class="text-muted">Comentario</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 card-body">
						<div class="card" style="width: 18rem;">
							<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="/html/prod_almacenamiento_uno.html"><button type="button"
												class="btn btn-sm btn-outline-secondary">Detalles</button></a>
									</div>
									<small class="text-muted">Comentario</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>

		<!-- Slide -->

		<?php
		include_once('inc/slide.php');
		?>




	<!-- Footer -->
	<?php
		require_once('inc/footer.php');
	?>

	<!-- library -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>

</body>

</html>

<!-- browser-sync start --server -f -w -->