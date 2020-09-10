<?php
//aqui conectamos con la base de datos desde el archivo pgconect.php
include ("autentificacion.php");

//la orden trim elimina los espacios en blanco al inicio y al final de una cadena de caracteres


  //le damos valor a las variables mediante un metodo post desde un formulario html
   $id_solicitud = ($_POST["idSolicitud"]);
   


//con esta consulta traemos el password y la contraseña para hacer la validacion
    $SQL2 = "SELECT  area_proyecto, ganancia_esperada, fase, nom_solicitud,  fecha_cancelacion, valor, (valor-monto) as Faltante, url_pdf, url_video, porcent
	FROM tab_solicitud where id_solicitud='$id_solicitud';";

$result2 = pg_query($SQL2);
$fila2=pg_fetch_array($result2);
$areaProyecto= $fila2[0];
$ganancia=  $fila2[1];
$fase= $fila2[2];
$nombreSolicitud=  $fila2[3];
$fechaCancelacion= $fila2[4];
$valor=  $fila2[5];
$faltante= $fila2[6];

   $SQL3 = "SELECT  evaluacion, comentario
	FROM tab_evaluacion where id_solicitud= '$id_solicitud';";

$result3 = pg_query($SQL3);
$fila3=pg_fetch_array($result3);
$porentajeEvaluacion= $fila3[0];
$comentario=  $fila2[1];
$fase= $fila2[2];

$SQL4 = "SELECT  comentario
	FROM tab_comentarios where id_solicitud='$id_solicitud';";

$result4 = pg_query($SQL4);
$fila4=pg_fetch_array($result4);
$comentario= $fila4[0];
 ?>