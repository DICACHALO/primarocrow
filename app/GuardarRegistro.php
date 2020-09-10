<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra
 include ("autentificacion.php");

$id_persona = $_POST['id'];

$nombre_persona = $_POST["nombre"]; 
$apellidos=$_POST["apellidos"];
$correo = $_POST["correo"];
$sexo = $_POST["sexo"];
$fecha = $_POST["fecha"];

$area_accion = $_POST["areac"];
$tiempo_area = $_POST["tiemar"];
$psw = $_POST["clave"];
$psw2 = $_POST["confirmar"];
$enc =base64_encode($psw);
$enc2 =base64_encode($psw2);

$des = base64_decode($enc);
if($enc == $enc2)  
    { 
           $consulta="INSERT INTO tab_persona VALUES('$id_persona','Natural', '$nombre_persona','$apellidos', '$correo', '$sexo', '$fecha', 1,'$area_accion', '$tiempo_area', '$enc')";

    $respuesta= pg_query($consulta) or die ('Error. Intente de nuevo'.pg_last_error($dbconn));
        pg_close($dbconn);   
        echo "<script>alert('Registro Exitoso');
        </script>";
        echo'
    <html>
      <head>
        <meta http-equiv="REFRESH" content="1;url=index.html">
      </head>
    </html>
    ';
  }
else {
   echo"<script>alert('Las contraseñas no coinciden');
          </script>";
     echo'
    <html>
      <head>
        <meta http-equiv="REFRESH" content="0;url=pass.html">
      </head>
    </html>
    '; }




?>