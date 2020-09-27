<?php
$comentarios = array(
	
	0 => array (
		'id_comentario' => '1',
		'comentario' => 'Esto es un comentario',
),

1 => array (
	'id_comentario' => '2',
	'comentario' => 'Esto es un comentario',
),

2 => array (
	'id_comentario' => '3',
	'comentario' => 'Esto es un comentario',
),

3 => array (
	'id_comentario' => '4',
	'comentario' => 'Esto es un comentario',
),

4 => array (
	'id_comentario' => '5',
	'comentario' => 'Esto es un comentario',
),


);

 $json_comentarios = json_encode($comentarios);
    $fp = 'comentarios.json';
    file_put_contents($fp, $json_comentarios);
?>