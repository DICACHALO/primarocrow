<?php
//Este archivo guarda los datos del formulario del login.html cuando una persona se registra
include ("autentificacion.php");

$id_persona = $_POST['id'];

$nombre_persona = $_POST["nombre"]; 
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];

$area_accion = $_POST["areac"];
$tiempo_area = $_POST["tiemar"];
$psw = $_POST["clave"];
$psw2 = $_POST["confirmar"];
$enc =base64_encode($psw);
$enc2 =base64_encode($psw2);

function calculaedad($fechanacimiento){
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0)
    $ano_diferencia--;
  
  if($ano_diferencia < 4 & $ano_diferencia > 0){
$tiempo_area = ('menos de 3');
      }
      
     if($ano_diferencia > 3  & $ano_diferencia < 6 ){
      $tiempo_area = ('entre 3 y 5');
      }
     if(  $ano_diferencia >= 6 ){
      $tiempo_area = ('6 o mas');
      }
      return $tiempo_area;
}

$fechaUno= calculaedad ($fecha);

$des = base64_decode($enc);
if($enc == $enc2)  
    { 
           $consulta="INSERT INTO tab_persona VALUES('$id_persona','Juridica', '$nombre_persona','No aplica', '$correo', 'N', '$fecha', 1,'$area_accion', '$tiempo_area', '$enc')";

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