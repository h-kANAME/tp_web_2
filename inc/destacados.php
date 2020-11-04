  <div class="container">
    <div class="row my-5">
   
          <?php
          foreach ($productos as $producto) {
            if ($producto["destacado"]) {
              echo "<div class='col'>

						<div class='card' style='width: 17rem;'>
              <img src='" . $producto["imagen"] . "' class='card-img-top' alt=" . $producto["modelo"] . ">
              <div class='card-body'>
                <h5 class='card-title'>" . $producto["modelo"] . "</h5>
              </div>
             
                <h4 class='text-center'> $" . $producto["precio"] . " </h4>
              
								<div class='btn-group'>
								<a href='producto_modelo.php?id_producto=" . $producto["id_producto"] . "' class='btn btn-primary'>Detalles</a>
							</div>
            </div>
          </div>";
            }
          }

          ?>
     
    </div>
  </div>

	<!-- 
	<div class="container">
				<div class="row my-4">

				<div class="col-md-4 card-body">
					<div class="card" style="width: 13rem;">
						<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg"
							class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text">Producto Destacado</p>
							<p class="card-text">ARS 1.000</p>
							<p class="card-text">Comemtario</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="producto_modelo.php"><button type="button" class="btn btn-dark">Detalles</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4 card-body">
					<div class="card" style="width: 13rem;">
						<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg"
							class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text">Producto Destacado</p>
							<p class="card-text">ARS 1.000</p>
							<p class="card-text">Comemtario</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="producto_modelo.php"><button type="button" class="btn btn-dark">Detalles</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4 card-body">
					<div class="card" style="width: 13rem;">
						<img src="https://www.venex.com.ar/products_images/1585751676_ssd_240gb_kingston_a400_2.jpg"
							class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text">Producto Destacado</p>
							<p class="card-text">ARS 1.000</p>
							<p class="card-text">Comemtario</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="producto_modelo.php"><button type="button" class="btn btn-dark">Detalles</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		Pausa -->