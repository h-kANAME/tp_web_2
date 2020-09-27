<?php
include_once('inc/header.php');
?>

<div class="container mb-5">
	<div class="row cardMainColor">

		<div class="col md-3">
			<?php
				include_once('inc/filtros.php');
			?>
		</div>

		<div class="card body bg-dark col-8 mt-5">
			<img src="https://www.kindpng.com/picc/m/295-2952973_transparent-hyperx-png-hyper-x-ssd-transparent-png.png"
				class="card-img-top my-3" alt="...">

			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h5 class="card-title">Nombre del producto</h5>
						</div>
						<div class="col-md-6">
							<p class="card-text text-warning lead">$1000</p>
						</div>
					</div>
				</div>
			</div>
			<div>
				<table class="table table-striped cardMainColor">
					<thead>
						<tr>
							<th scope="col">Marca</th>
							<th scope="col">Modelo</th>
							<th scope="col">Descripcion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">HYPERX</th>
							<td>SAVAGE</td>
							<td>Descripcion del producto</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<label for="name" class="">Nombre</label>
							<input type="text" id="name" name="name" class="form-control">
						</div>
						<div class="col-md-6">
							<div class="md-form mb-0">
								<label for="apellido" class="">Apellido</label>
								<input type="text" id="apellido" name="apellido" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label>Califica el producto</label><br>
							<form>
								<p>
									<select sector="sector">
										<option>*****</option>
										<option>****</option>
										<option>***</option>
										<option>**</option>
										<option>*</option>
									</select>
								</p>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label>Su comentario aqui</label>
							<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-lg btn-warning">Comentar</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php
include_once('inc/footer.php');
?>