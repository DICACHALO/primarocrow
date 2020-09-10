<?php
//aqui conectamos con la base de datos desde el archivo pgconect.php
include ("autentificacion.php");

//la orden trim elimina los espacios en blanco al inicio y al final de una cadena de caracteres


  //le damos valor a las variables mediante un metodo post desde un formulario html
   $id_persona = ('idPersona');
   

//con esta consulta traemos el password y la contraseña para hacer la validacion
    $SQL2 = "SELECT * FROM tab_solicitud WHERE id_persona = '$id_persona'";

      $result2 = pg_query($SQL2);
$fila2=pg_fetch_array($result2);
$idSolicitud= $fila2[0];
$areaProyecto=  $fila2[2];
$indCompe= $fila2[3];
$gananciaEsperada= $fila2[4];
$fase= $fila2[5];
$nomSolicitud= $fila2[6];
$fechaCreacion= $fila2[7];
$fechaCancelacion= $fila2[8];
$valor= $fila2[9];
$monto= $fila2[10];
$tipo= $fila2[11];
$estado= $fila2[12];
$pdf= $fila2[13];
$video= $fila2[14];
    

?>