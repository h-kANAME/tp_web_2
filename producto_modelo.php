<?php
include_once('inc/header.php');
?>

<style>
.cardProducto {
	color: black;
}
</style>

<div class="container">
	<div class="row cardMainColor">

		<div class="card body bg-danger col-9">
			<img src="https://www.kindpng.com/picc/m/295-2952973_transparent-hyperx-png-hyper-x-ssd-transparent-png.png"
				class="card-img-top my-3" alt="...">

			<div class="card-body">
				<h5 class="card-title">Nombre del producto</h5>
				<p class="card-text">Aca una breve descripcion</p>
			</div>

			<table class="table table-striped cardMainColor">
				<thead>
					<tr>
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Detalles</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">HYPERX</th>
						<td>SAVAGE</td>
						<td>Cositas que tiene</td>
					</tr>
				</tbody>
			</table>

			<div class="card-body">
				<div class="card-text">
					<h4>Lorem, ih4psum dolor sit amet consectetur adipisicing elit. Blanditiis odit, quas libero hic, beatae
						voluptatem illo totam in aspernatur pariatur repudiandae excepturi neque incidunt aliquam sequi aut deserunt
						culpa placeat?</h4>

				</div>
			</div>
		</div>


		<div class="col md-3">
			<?php
				include_once('inc/filtros.php');
			?>
		</div>
	</div>
</div>

<?php
include_once('inc/footer.php');
?>