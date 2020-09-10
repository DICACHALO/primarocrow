<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra

include ("autentificacion.php");

$id_comentario= $_POST['idComentario'];
$id_solicitud= $_POST['id_solicitud'];
$comentario= $_POST['comentario'];


      $consulta="INSERT INTO tab_comentarios VALUES('$id_comentario','$id_solicitud', '$comentario')";
   $respuesta= pg_query($consulta);



?>