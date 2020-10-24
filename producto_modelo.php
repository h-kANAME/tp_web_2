<?php
include_once ('inc/header.php');
//include_once ('inc/comentarios.php');
?>

<div class="container mb-5">
	<div class="row cardMainColor">
		<div class="card body bg-dark col-12 mt-5">
			<img src="https://www.kindpng.com/picc/m/295-2952973_transparent-hyperx-png-hyper-x-ssd-transparent-png.png"
				class="card-img-top my-3" alt="...">

			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h5 class="card-title" id="1">Nombre del producto</h5>
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
						<div class="col">
							<form name="form" method="POST" action="">
								<div class="form-group">
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Tu email"
										required>
									<br>
								</div>
								<textarea class="form-control" name="descripcion" rows="6" placeholder="Tu comentario..."
									required></textarea>

								<div class="form-group my-3">
									<select name="califaicacion">
										<option value="★">*</option>
										<option value="★★">**</option>
										<option value="★★★">***</option>
										<option value="★★★★">****</option>
										<option value="★★★★★">*****</option>
									</select>
								</div>

								<!--  <input type="hidden" name="producto_id" value= <?php //echo $_GET['comentarios.json']?>> -->

								<input type="submit" name="comentar" class="btn btn-success" value="Comentar" />

							</form>
						</div>
					</div><!-- /row -->
				</div><!-- /container -->


				<!-- GUARDADO EN JSON DE COMENTARIOS -->

				<?php
if (isset($_POST['comentar']))
{

    $data = $_POST;
    unset($data['comentar']);
    $data['fecha'] = date('d/m/Y H:i:s');
    $fecha = new DateTime();
    $indexComentario = $fecha->format('YmdHisu');

    if (file_exists('comentarios.json'))
    {
        $comentarioJson = file_get_contents('comentarios.json');
        $comentarioArray = json_decode($comentarioJson, true);
    }
    else
    {
        $comentarioArray = array();
    }

    $comentarioArray[$indexComentario] = $data;

    file_put_contents('comentarios.json', json_encode($comentarioArray));
}

?>

				<div class="container">
					<div class="row mt justify-content-center">
						<div class="text-center">
							<h3>Comentarios</h3>

							<?php
if (file_exists('comentarios.json'))
{
    $comentarioJson = file_get_contents('comentarios.json');
    $comentarioArray = json_decode($comentarioJson, true);
    krsort($comentarioArray);

    $cantidad = 0;

    foreach ($comentarioArray as $comentario)
    {

        $cantidad++;
        if ($cantidad == 6) break;
?>
							<div>
								<h4><?php echo $comentario['califaicacion'] ?></h4>
								<h5>
									<?php echo $comentario['email'] . ' (' . $comentario['fecha'] . '): ' . $comentario['descripcion']; ?>
								</h5>
							</div>
							<?php
    }
} ?>

						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
</div>

<?php
include_once ('inc/footer.php');
?>
