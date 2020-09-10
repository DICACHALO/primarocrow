
<?php
include ("pgconect.php");
@session_start();
 $us=($_SESSION['k_username']);
 //@ previene warning contra sesiones automáticas (no recomendado)
//if(!isset($_SESSION["k_username"])){ 
 // Header("Location:login.html"); 

//}
?>