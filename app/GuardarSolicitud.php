<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra

include ("autentificacion.php");



$area_proyecto= $_POST['arePro'];
$ind_compe= $_POST['indCompe'];
$ganancia_esperada= $_POST['ganancia'];
$fase= $_POST['fase'];
$nom_solicitud= $_POST['nomSol'];
$fecha_cancelacion= $_POST['fechaCancelacion'];
$valor= $_POST['valor'];
$tipo= $_POST['tipo'];
$url_pdf= $_POST['urlPdf'];
$url_video= $_POST['urlVideo'];
$us=$_SESSION["k_username"];

      $consulta="INSERT INTO tab_solicitud VALUES(default,'$us', '$area_proyecto','$ind_compe', '$ganancia_esperada', '$fase', '$nom_solicitud', Now(), '$fecha_cancelacion', '$valor', 0,
      '$tipo', 'En espera', '$url_pdf', '$url_video' )";
   $respuesta= pg_query($consulta);



echo "<script>alert('Registro Exitoso');
        </script>";
        echo'
    <html>
      <head>
        <meta http-equiv="REFRESH" content="1;url=home.php">
      </head>
    </html>
    ';

?>