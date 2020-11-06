<?php
include_once ('inc/header.php');
//include_once ('inc/comentarios.php');
?>

<?php
$id_producto = $_REQUEST['id_producto'];
$productos = json_decode(file_get_contents('json/productos.json'), true);
$comentarios = json_decode(file_get_contents('json/comentarios.json'), true);
//Producto heredado
$producto = $productos[$id_producto];

?>

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
								<input type="submit" name="comentar" class="btn btn-success">
							</form>
						</div>
					</div><!-- /row -->
				</div><!-- /container -->

<!-- GUARDADO EN JSON DE COMENTARIOS -->

<?php
if (isset($_REQUEST['email']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['califaicacion'])) {

  $email = $_REQUEST['email'];
  $comentario = $_REQUEST['descripcion'];
  $califaicacion = $_REQUEST['califaicacion'];

  date_default_timezone_set("America/Argentina/Buenos_Aires");
	$comentarios[date('YmdHisU')] = array("fecha" => date('d-m-Y H:i:s'),
	"id_producto" => $id_producto,
	"descripcion" => $comentario,
	"califaicacion" => $califaicacion,
  "email" => $email,);

file_put_contents('json/comentarios.json',json_encode($comentarios));

}
?>
				<div class="container">	
						<div class="text-center">
							<h2>Comentarios</h2>
							<br>
					<?php
				
		   		if (count($comentarios) > 0) {

						arsort ($comentarios);
						$contador = 0;
						foreach ($comentarios as $comentario) {
				if ($comentario["id_producto"] == $id_producto) {
					$contador++;
					if($contador == 4) break;

						echo " <div class='card-body bg-secondary'>
					
						<h4> Comentario de: " . $comentario["email"] . "</h4>
						<p class='my-3'></p>
						
						<h5>" . $comentario["descripcion"] . "</h5>
						<p class='my-3'></p>
						
						<h4><strong>Valoración: </strong> " . $comentario["califaicacion"] . "</h4>
						<p class='my-3'></p>
						
						<p>" . $comentario["fecha"] . "</p>
						</div>";
					echo '<br>';
					
				}
			}
    }
		?>
						</div>
				</div>	
		</div>
	</div>
</div>

<?php
include_once ('inc/footer.php');
?>