<?php
include ("autentificacion.php");
function calculaedad($fechanacimiento){
	list($ano,$mes,$dia) = explode("-",$fechanacimiento);
	$ano_diferencia  = date("Y") - $ano;
	$mes_diferencia = date("m") - $mes;
	$dia_diferencia   = date("d") - $dia;
	if ($dia_diferencia < 0 || $mes_diferencia < 0)
		$ano_diferencia--;
	
	if($ano_diferencia < 4 & $ano_diferencia > 0){

	  echo('menos de 3 anos');

      }
      
     if($ano_diferencia > 3  & $ano_diferencia < 6 ){
	    echo('entre 3 y 5 años');

      }
     if(  $ano_diferencia >= 6 ){
	    echo('6 o mas años');

      }
      return $ano_diferencia;
}
 
// Modo de uso
echo calculaedad ('2000-06-25'); // Imprimirá: 30





?>