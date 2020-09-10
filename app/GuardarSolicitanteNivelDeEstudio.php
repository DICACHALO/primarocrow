<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra

include ("autentificacion.php");


$nivel= $_POST['nivel'];



      $consulta="INSERT INTO tab_solicitante VALUES('234','$nivel')";
   $respuesta= pg_query($consulta);



?>