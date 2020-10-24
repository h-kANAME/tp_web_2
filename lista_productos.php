<!--Header-->
<?php
require_once ('inc/header.php');
?>


<div class="container">
	<div class="row">
		<div class="col-md-6 pt-5">
			<h1 class="text-dark pb-4">Listado de productos</h1>
		</div>
	</div>
</div>


<!-- Filtrado -->
<div class="container">
	<div class="row">
		<div class="col-md-4 ">

			<?php
if (isset($_REQUEST['id_marca'])) $id_marca = $_REQUEST['id_marca'];
else $id_marca = array();

if (isset($_REQUEST['id_categoria'])) $id_categoria = $_REQUEST['id_categoria'];
else $id_categoria = array();

$a_multi_marcas = json_decode(file_get_contents('marcas.json') , true);
$a_multi_categorias = json_decode(file_get_contents('categorias.json') , true);

echo '<form action="" method="get">';
echo '<ul>';
echo '<li>';
echo 'Marcas<br>';
echo '</li>';
echo '<ul>';
foreach ($a_multi_marcas as $a_marca)
{
    if (in_array($a_marca['id_marca'], $id_marca)) $checkar = 'checked="chequed"';
    else $checkar = '';

    echo '<li>';
    echo '<input onChange="this.form.submit()" type="checkbox" name="id_marca[]" value = "' . $a_marca['id_marca'] . '"' . $checkar . '>' . $a_marca['nombre'];
    echo '</li>';
};
echo '</ul>';
echo '</ul>';

echo '<ul>';
echo '<li>';
echo 'Categorias<br>';
echo '</li>';
echo '<ul>';
foreach ($a_multi_categorias as $a_categoria)
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


		<div class="col ">

<?php
$a_multi_productos = json_decode(file_get_contents('productos.json') , true);
foreach ($a_multi_productos as $a_producto)
{
    if ((in_array($a_producto['id_marca'], $id_marca) || empty($id_marca)) && ((in_array($a_producto['id_categoria'], $id_categoria) || empty($id_categoria))))
    {

        echo '<pre>';
        print_r($a_producto);
        echo '</pre><hr>';
    }
}

?>

		</div>
	</div>
</div>

<!--Slide medios de pago-->

<?php
include_once ('inc/slide_medios_de_pago.php');
?>


<!-- Footer -->
</div>
</div>
<?php
require_once ('inc/footer.php');
?>



</html>
