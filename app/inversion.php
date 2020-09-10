<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra

include ("autentificacion.php");


$id_solicitud= $_POST['boton'];
$id_persona= $us;
$monto= $_POST['inversion'];


 $SQL2 = "SELECT monto, valor FROM tab_solicitud WHERE id_solicitud = '$id_solicitud'";

      $result2 = pg_query($SQL2);

     if($fila2=pg_fetch_array($result2)){

     	$nuevovalor=$monto+$fila2[0];
     	if ($nuevovalor>$fila2[1]){
     		$valor=$nuevovalor-$fila2[1];
     		echo $valor;
     		$monto=$monto-$valor;
     		echo $monto;
     		$valor1=$monto+$fila2[0];
     		echo '<script language="javascript">alert("su inversion fue mayor al monto necesario, por lo que solo pudimos recibir'.$monto.', muchas gracias por su inversión");
</script>';

 $SQL5 = "UPDATE tab_solicitud SET estado='Aprobado', monto='$valor1' WHERE id_solicitud = '$id_solicitud'";
$result5 = pg_query($SQL5);

   $SQL3 = "SELECT a.correo FROM tab_persona a, tab_solicitud b WHERE b.id_solicitud = '$id_solicitud' and a.id_persona=b.id_persona";
  $result3 = pg_query($SQL3);
	$fila1=pg_fetch_array($result3);
	$correo=$fila1[0];
	
  	$para      = $correo;
    $titulo    = 'Notificación de cumplimiento de meta';
    $mensaje   = "Un cordial saludo, Felicitaciones la meta de inversion fue completada";
    $cabeceras = "From: cprieto380@unab.edu.co";

mail($para, $titulo, $mensaje, $cabeceras);
     	}else{
     		$valor1=$monto+$fila2[0];
$SQL = "UPDATE tab_solicitud SET monto='$valor1' WHERE id_solicitud = '$id_solicitud'";
$result = pg_query($SQL);
     	}


     }

     $consulta="INSERT INTO tab_inversion VALUES(default,'$id_solicitud', '$id_persona', '$monto')";
   $respuesta= pg_query($consulta);
    header("Location: home.php");
?>