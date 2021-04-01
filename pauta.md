# tp_web_2

Hardware > Mostrar todos los componentes que integra el filtro "Hardware" Emma
Software > Mostrar todos los componentes que integra el filtro "Software" Ricardo
Perifericos > Mostrar todos los componentes que integra el filtro "Perifericos" Brayan

Página principal del sitio
Encabezado: con el logo, el propósito de la página y un menú.
El menú debe permitir redirigir a las distintas partes del sitio.
El encabezado tiene que estar presente en todas las páginas del sitio.

Barra lateral de Navegación
Con un segundo menú de filtrado de productos. Puede ser que en algunas páginas no esté presente.
Cuerpo principal: con el contenido a mostrar, puede ser un listado de productos, un producto con sus comentarios, un formulario de contáctenos. Al iniciar el sitio, el cuerpo principal debe mostrar los productos destacados. El sitio tiene que tener por lo menos 20 productos, de esos 20 solo debe haber hasta 6 destacados.
Pie: con los integrantes, número del grupo, materia, año y cuatrimestre. El pie tiene que estar presente en todas las páginas del sitio.

//

Listado de productos
Página donde se muestra el listado de todos los productos. Cada producto debe estar representado por una imagen pequeña, el nombre del producto, el precio y solo una parte pequeña de la descripción, con las 20 primeras letras.
Cada producto debe contener un enlace que lleve a la página de detalle del producto.

Los productos deben estar catalogados por categoría y marca.
Debe haber por lo menos 3 categorías y 5 marcas.
Cada marca debe contar con productos de las 3 categorías. 

Se debe poder ver un menú (en la barra lateral) con las categorías arriba y las marcas abajo.
Se deben incluir las palabras “Categorías” y “Marcas”.
Seleccionando una categoría se deben mostrar solo los productos de esa categoría.
Se debe resaltar dicha categoría en el menú, seguir mostrando la demás categorías y permitir des seleccionar la categoría seleccionada haciendo click en la palabra  “Categorías”. 
Lo mismo debe pasar con las marcas.
Si se selecciona una categoría, solo se deben ver productos de esa categoría, independientemente de la marca seleccionada.
Solo se desactivará el filtro de la categoría haciendo click en “Categorías”.
Lo mismo debe pasar con las marcas.

//

Detalle del producto
Página que muestra una foto grande, nombre, descripción, marca y modelo del producto.
De no tener “modelo” reemplazarlo por otra característica distintiva.
Debajo del detalle de cada producto, se tiene que tener la opción de dejar un comentario. 
Y debajo, se tienen que poder ver los últimos 3 comentarios ordenados de más reciente a más antiguo. 

Comentarios de productos
Cada comentario debe permitir registrar un email, una descripción del comentario y ranquear el producto entre 1 y 5 estrellas.  Cuando el comentario es ingresado debe ser almacenado en un archivo, junto con el resto de los comentarios.

//

Contáctenos
Formulario por el cual una persona se pone en contacto con los administradores de la página.
Este formulario debe tener las siguientes opciones:
Nombre y apellido
Correo electrónico
Teléfono
Área de la empresa a quien se quiere mandar la consulta.
Comentario
Al presionar enviar se debe generar un correo electrónico al área de la empresa seleccionada en el formulario.
No debe mostrar la barra de navegación de categorías y marcas.
Archivos
Todos los productos y sus atributos deben estar almacenados en un archivo. Lo mismo debe pasar con los archivos de marcas, categorías y comentarios. Los datos deben estar almacenados en formato “jSon”. (Se usan archivos como reemplazo a una base de datos.) El archivo de comentarios tiene que tener todos los comentarios de todos los productos, por lo tanto debe ir creciendo a medida que se van dejando comentarios. El resto de los archivos se llenan en la etapa de diseño y no varían de tamaño en forma dinámica. Los correos electrónicos no se almacenan en archivos.


//

Segunda entrega PAUTAS

Sitio funcionando 100%

Formato: PW2-GN-MM-DD-Apellido1-Apellido2-Apellido3-Apellido4.rar

Listado de mejoras para el final. Se debe elegir al menos una:
● Agregar campos al detalle del producto, o al formulario de contáctenos.
✔ En la página de contáctenos permitir al usuario subir un archivo y guardarlo en
una carpeta llamada “contactos”. 
● Agregar un botón de carrito de compras que guarde el producto en un archivo
en formato json, junto al resto de los productos agregados.
● Agregar un formulario de suscripción a una lista de correo, que agregue la
dirección de correo del usuario a un archivo json llamado “correos”.
● Agregar una pantalla de pago del carrito de compras, que lea el archivo json,
muestre todos los productos en una grilla y permita “pagar” o “eliminar” toda la
compra con un botón de pago y otro de eliminar. En ambos casos se debe
borrar el archivo. (También se pueden sugerir otras soluciones).
● Agregar una página en la que solo se vean productos nuevos, agregando un
atributo de “nuevo” si/no a cada producto.
✔ Permitir bajar (exportar) a un PDF la información del detalle de un producto.
● Validar los tipos de datos de los campos de los formularios con JavaScript.
✔ Mostrar los mensajes de “Comentario Enviado” y “Consulta Enviada” con
Javascript, por ejemplo, con una ventana modal.
● Asociar funcionalidad a eventos de elementos HTML tales como OnCheck en un
checkbox de algún formulario usando Javascript.

//Mejoras aplicadas instancia FINAL

1)Mensaje en title en caso de haber un error en el envio del correo. 
2)Posibilidad de subir un achivo alojando el mismo junto a la identificacion del usuario (mail)
3)Se agrego ventana modal de aviso correo enviado con éxito
4)Se habilita la posibilidad de generar un PDF de la ficha tecnica del producto
5)Se diseño nuevo logo para generacion de PDF
6)Se corrigio el error que arrojaba en linea 35 de "archivos.php" quitando la propidad disabled de la clase del selector en "contacto.php"
7)Se cambio input de comentarios por un button	para darle identidad a la accion (antes enviar, ahora comentar)
8)Se crearon variables para identificar dentro de una estrucutra HTML las ventanas modales de envio de correo electronico.


