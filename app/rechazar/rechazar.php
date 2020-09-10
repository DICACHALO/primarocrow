
<?php
$dbconn = pg_connect("host=localhost
					  port=5432 
					  dbname=mayacrow
					  user=postgres 
					  password=0000")
or die('No se ha podido conectar: ' . pg_last_error());

$fecha_actual=date("Y/m/d");

 //$SQL2 = "update tab_solicitud set estado='Rechazado' WHERE fecha_creacion = '$fecha_actual'";
 $SQL2 = "update tab_solicitud set estado='Rechazado' WHERE fecha_creacion = '$fecha_actual'";


      $result2 = pg_query($SQL2);

   $SQL = "SELECT id_persona FROM tab_solicitud WHERE fecha_creacion = '$fecha_actual'";
   $result = pg_query($SQL);
   while($fila2=pg_fetch_array($result)){

	$idpersona= $fila2[0];
	

  $SQL3 = "SELECT correo FROM tab_persona WHERE id_persona = '$idpersona'";
  $result3 = pg_query($SQL3);
	$fila1=pg_fetch_array($result3);
	$correo=$fila1[0];
	
  	$para      = $correo;
    $titulo    = 'Notificación de rechazo de solicitud';
    $mensaje   = "Un cordial saludo, lamentamos informarle que su solicitud de inversión ha sido rechazada debido a vencimiento del plazo de inversión";
    $cabeceras = "From: cprieto380@unab.edu.co";

mail($para, $titulo, $mensaje, $cabeceras);

}
?>