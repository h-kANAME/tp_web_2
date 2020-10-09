<?php
$comentarios = array(
	
	1 => array (
		'id_comentario' => 1,
		'comentario' => 'Esto es un comentario',
		'valoracion' => 1
),

2 => array (
	'id_comentario' => 2,
	'comentario' => 'Esto es un comentario',
	'valoracion' => 2
),

3 => array (
	'id_comentario' => 3,
	'comentario' => 'Esto es un comentario',
	'valoracion' => 3
),

4 => array (
	'id_comentario' => 4,
	'comentario' => 'Esto es un comentario',
	'valoracion' => 4
),

5 => array (
	'id_comentario' => 5,
	'comentario' => 'Esto es un comentario',
	'valoracion' => 5
),


);

file_put_contents('comentarios.json', json_encode($comentarios));

?>