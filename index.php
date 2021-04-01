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
        <div class="list-group col -md-4">
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
?>


<?php
//Marcas
echo '<form action="" method="get">';
echo '<ul>';
echo '<li class="list-group-item bg-dark text-white text-center">';
echo '<strong>Marcas</strong><br>';
echo '</li>';
echo '<ul class="list-group-item">';

foreach ($marcas as $a_marca){
    if (in_array($a_marca['id_marca'], $id_marca)) $checkar = 'checked="chequed"';
    else $checkar = '';

    echo '<li>';
    echo '<input onChange="this.form.submit()" type="checkbox" name="id_marca[]" value = "' . $a_marca['id_marca'] . '"' . $checkar . '>' . $a_marca['nombre'];
    echo '</li>';
};
echo '</ul>';
echo '</ul>';

//Categorias

echo '<ul>';
echo '<li class="list-group-item bg-dark text-white text-center">';
echo '<strong>Categorias</strong><br>';
echo '</li>';
echo '<ul class="list-group-item">';

foreach ($categorias as $a_categoria)
{
    if (in_array($a_categoria['id_categoria'], $id_categoria)) $checked = 'checked="chequed"';
    else $checked = '';
    echo '<li>';
    echo '<input onChange="this.form.submit()" type="checkbox" name="id_categoria[]" value = "' . $a_categoria['id_categoria'] . '" ' . $checked . '>' . $a_categoria['nombre'];
    echo '</li>';
}
echo '</ul>';
echo '</ul>';
?>

        </div>
        <div class="row">
            <div class="col">
                <?php
include_once ('inc/destacados.php');
?>
            </div>
        </div>

    </div>

</div> <!-- Cierra container filtros/destacados -->


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


<?php
require_once ('inc/footer.php');
?>



</html>