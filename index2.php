<?php
$titulo = 'KYZ Technology - Inicio';
	require_once ('inc/header.php');
	require_once ('inc/productos.php');
	require_once ('inc/marcas.php');
	require_once ('inc/categorias.php');
?>

<div class="container">
    <div class="row">
        <div class="col md-12 my-4 ">
            <?php
include_once ('inc/carrousel.php');
?>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-3 my-3">

            <div class="card text-center">
                <div class="btn btn-dark">
                    <h5 class="mb-0">Marcas</h5>
                </div>
                <?php
if (isset($_REQUEST['id_marca']))
$id_marca = $_REQUEST['id_marca'];
else $id_marca = array();

if (isset($_REQUEST['id_categoria'])) 
$id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();

$marcas = json_decode(file_get_contents('json/marcas.json') , true);
$categorias = json_decode(file_get_contents('json/categorias.json') , true);

include_once('inc/productos.php');
$productos = json_decode(file_get_contents('json/productos.json'), true);

if (isset($_REQUEST['id_marca'])) $id_marca = $_REQUEST['id_marca'];
else $id_marca = array();
$marcass = json_decode(file_get_contents('json/marcas.json') , true);
?>

<form action="" method="GET">
    <ul class="list-group">
                        <?php
foreach ($marcass as $marcasArray){

    if (in_array($marcasArray['id_marca'], $id_marca)){
        $checkar = 'checked="chequed"';
    }else $checkar = '';
?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <?php
    echo '<input type="checkbox" class="form-check-input type="checkbox" onChange="this.form.submit()" name="id_marca[]" value = "' . $marcasArray['id_marca'] . '"' . $checkar . '>' . $marcasArray['nombre'];
?>
                            </div>
                        </li>
                        <?php
}
?>
                    </ul>

                    <div class="my-3"></div>
                    <!-- Categorias -->
                    <div class="card text-center">
                        <div class="btn btn-dark">
                            <h5 class="mb-0">Categorias</h5>
                        </div>
                        <?php
if (isset($_REQUEST['id_categoria']))
$id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();

if (isset($_REQUEST['id_categoria'])) 
$id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();

$categorias = json_decode(file_get_contents('json/categorias.json') , true);
$categorias = json_decode(file_get_contents('json/categorias.json') , true);

include_once('inc/productos.php');
$productos = json_decode(file_get_contents('json/productos.json'), true);

if (isset($_REQUEST['id_categoria'])) $id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();
$categoriass = json_decode(file_get_contents('json/categorias.json') , true);
?>



                        <ul class="list-group">
                            <?php
foreach ($categorias as $categoriasArray){

    if (in_array($categoriasArray['id_categoria'], $id_categoria)){
        $checkar = 'checked="chequed"';
    }else $checkar = '';
?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <?php
    echo '<input type="checkbox" class="form-check-input type="checkbox" onChange="this.form.submit()" name="id_categoria[]" value = "' . $categoriasArray['id_categoria'] . '"' . $checkar . '>' . $categoriasArray['nombre'];
?>
                                </div>
                            </li>
                            <?php
}
?>
                        </ul>
                </form>


            </div>
        </div>
    </div>



    <div class="col md-9 my-3">

        <div class="card text-center">
            <div class="btn btn-primary">
                <h5 class="mb-0">¡Productos destacados!</h5>
            </div>
        </div>

        <div class="card-group my-5">
            <div class="row">
                <?php
          foreach ($productos as $producto) {
            if ($producto["destacado"]) {
              echo "<div class='card md-3'>

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
    </div>
</div>


<div class="card text-center my-5">
    <div class="btn btn-dark">
        <h5 class="mb-0">Catálogo de productos</h5>
    </div>
</div>

<div class="container">
    <div class="col -md-12">

        <div class="row">
            <div class="py-2">

                <div class="row">
                    <?php
				$productos = json_decode(file_get_contents('json/productos.json') , true);
				foreach ($productos as $a_producto){
					if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) && 
					   ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria)))){

							
						echo '<div class="col-md-4 card-body">';
						   echo '<div class="card" style="width: 20rem;">';
								echo '<div class="card text-center">';

								echo '<img src="' . $a_producto['imagen'] . '" class="card-img-top"  alt="' . $a_producto['modelo'] . '">';
								echo '<div class="card-body">';
								echo '<h5 class="card-title">' . $a_producto['modelo'] . '</h5>';
								
								echo '<h6 class="card-text">' . '$' . $a_producto['precio'] . '</h6>';
								echo '</div>'; //Cry

								echo '<div class="btn-group">';
								echo '<a href="producto_modelo.php?id_producto=' . $a_producto['id_producto'] . '" class="btn btn-dark">Detalles</a>';
							
								echo '</div>'; // Card body
								echo '</div>'; // Style width 20

							echo '</div>';
						echo '</div>';

 }
	}
?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
require_once ('inc/footer.php');
?>

</html>