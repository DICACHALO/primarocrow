<?php
//aqui conectamos con la base de datos desde el archivo pgconect.php
include ("autentificacion.php");

//la orden trim elimina los espacios en blanco al inicio y al final de una cadena de caracteres


  //le damos valor a las variables mediante un metodo post desde un formulario html
   $id_comentario = ('idComentario');
   

//con esta consulta traemos el password y la contraseña para hacer la validacion
    $SQL2 = "SELECT * FROM tab_comentarios WHERE id_comentario = '$id_comentario'";

      $result2 = pg_query($SQL2);
$fila2=pg_fetch_array($result2);
$idSolicitud= $fila2[0];
$idComentario=  $fila2[1];
$comentario= $fila2[2];


?>