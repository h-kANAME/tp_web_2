<?php
include_once ('inc/header.php');
//include_once ('inc/comentarios.php');
?>

<!-- Producto heredado -->
<?php
if (isset($_REQUEST['id_producto'])) {
  $id_producto = $_REQUEST['id_producto'];
} else {
  $id_producto = '';
}

$productos = json_decode(file_get_contents('productos.json'), true);
$producto = $productos[$id_producto];
?>
<!-- Producto heradado cierre -->

<div class="container py-5">
	<div class="row cardMainColor">
		<div class="card body bg-dark col-12 mt-5">
					<div class="container">
								<div class="row">
									<div class="col-8 py-5">
										<a href=<?php echo $producto ["imagenMax"] ?> target="__blank">
										 <img src=<?php echo $producto ["imagenMax"] ?> class="card-img-top" alt=""></a>
									</div>
									<div class="col-4 m-auto py-3">
										<h2 class=""> <strong> <?php echo $producto ["modelo"] ?> </strong> </h2>
										<h3><?php echo $producto ["descripcion"] ?></h3>
										<h4 class="my-5"> Precio: <strong>$<?php echo $producto ["precio"] ?> </strong> </h4>
										<div class="">
												<button class="btn btn-success">Comprar</button>
									</div>
							</div>
		    	</div>
					

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
								<input type="submit" name="comentar" class="btn btn-success" value="Comentar" />
							</form>
						</div>
					</div><!-- /row -->
				</div><!-- /container -->


<!-- GUARDADO EN JSON DE COMENTARIOS -->

<?php
if (isset($_POST['comentar'])){

    $data = $_POST;
    unset($data['comentar']);
    $data['fecha'] = date('d/m/Y H:i:s');
    $fecha = new DateTime();
    $indexComentario = $fecha->format('YmdHisu');

    if (file_exists('comentarios.json'))    {
        $comentarioJson = file_get_contents('comentarios.json');
        $comentarioArray = json_decode($comentarioJson, true);
    }
    else{
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
										if (file_exists('comentarios.json')){
												$comentarioJson = file_get_contents('comentarios.json');
												$comentarioArray = json_decode($comentarioJson, true);
												krsort($comentarioArray);
												$cantidad = 0;
												foreach ($comentarioArray as $comentario){
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
    						}}?>
						</div>
					</div>
				</div>
			
		</div>
	</div>
</div>


<?php
include_once ('inc/footer.php');
?>
