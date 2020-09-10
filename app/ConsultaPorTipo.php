<?php
//aqui conectamos con la base de datos desde el archivo pgconect.php
include ("autentificacion.php");

//la orden trim elimina los espacios en blanco al inicio y al final de una cadena de caracteres


  //le damos valor a las variables mediante un metodo post desde un formulario html
   $tipo = ($_POST["tipo"]);
   


//con esta consulta traemos el password y la contraseña para hacer la validacion
    $SQL2 = "SELECT  nom_solicitud, valor, (valor-monto) as loQueLeFalta
	FROM tab_solicitud where tipo='$tipo';";

$result2 = pg_query($SQL2);
$fila2=pg_fetch_array($result2);
$NombreSolicitud= $fila2[0];
$valor=  $fila2[1];
$faltante= $fila2[2];

 ?>