<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra

include ("autentificacion.php");

$id_inversion= $_POST['idInversion'];
$id_solicitud= $_POST['id_solicitud'];
$id_persona= $_POST['idPersona'];
$monto= $_POST['monto'];

      $consulta="INSERT INTO tab_inversion VALUES('$id_inversion','$id_solicitud', '$id_persona', '$monto')";
   $respuesta= pg_query($consulta);



?>