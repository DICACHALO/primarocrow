<?php // Este archivo valida que realmente el usuario y la contraseña se encuentren registrados en la base de datos


$id_usuario = $_POST["mail"]; //Numero de cedula del usuario 
$pwd = $_POST["pass"]; // Contraseña
include ("pgconect.php");  // Conectando y seleccionado la base de datos 

$des = base64_encode($pwd);
$res= base64_decode($des);
 $sql = pg_query("SELECT id_persona, correo, password, roll FROM tab_persona WHERE correo ='$id_usuario' AND password ='$des';")
 or die("Error. No es posible la conexión". pg_last_error());
 if ($fila2 = pg_fetch_array($sql))
  {
session_start();
//Comienza una sesión
  $_SESSION['k_username']=$fila2[0];
  $_SESSION['k_tipo']= $fila2[3];

    if ($_SESSION['k_tipo'] == 1) 
      {
   
       header("Location: home.php"); //Entra a la aplicación
          echo('soy usuario');
            
   }

    if ($_SESSION['k_tipo'] == 2)
    {

          echo('soy evaluador');

    }

  //session_set_cookie_params(0, "/", $_SERVER["HTTP_HOST"], 0); 



  } else{


   echo "USUARIO NO REGISTRADO" . $res;
   echo'
	<html>
		<head>
			<meta http-equiv="REFRESH" content="2;url=index.html">
		</head>
	</html>
	';
  }
  
  pg_close(); //Cierra conexión con la base de datos

?>