<?php include ("autentificacion.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Solicitud empresa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>

<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="home.php" class="btn btn-primary">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Crear solicitud</h3>
                    
                </div>
                <div class="form-group">
                
  </div>


 <!--Formulario para la persona-->               
                <div class="hpanel" class="element">
                    
<div id="empresa" class="element">
	<h2></h2>
    <form action="GuardarSolicitud.php" method="post" >
                            <div class="row">
                           <div class="form-group col-lg-12">
                                    <label>Nombre del proyecto:</label>
                                    <input type="text" name="nomSol" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Tipo de proyecto</label>
                                    <select name="tipo" class="form-control col-lg-6">
                                    
                                    <option value="Startup">Startup</option>
                                    <option value="Desarollo de prototipo">Desarollo de prototipo </option> 
                                    <option value="Proyecto escolar">Proyecto escolar</option> 
                                    <option value="Produccion de medios audiovisuales">Producción de medios audiovisuales</option> 
                                    <option value="Campaña política"> Campaña política</option> 
                                    <option value="Financiacion de deudas">Financiación de deudas</option> 
                                    <option value="Otro">Otro</option> 
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Área del proyecto</label>
                                    <select name="arePro" class="form-control col-lg-6">
                                    
                                    <option value="Agronomia">Agronomia</option>
                                    <option value="Biologia">Biologia</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Geofisica">Geofisica</option>
                                    <option value="Geografia">Geografia</option>
                                    <option value="Ingenieria">Ingenieria</option>
                                    <option value="Matematica">Matematica</option>
                                    <option value="Salud">Salud</option>
                                    <option value="Quimica">Quimica</option>
                                    <option value="Zootecnia">Zootecnia</option>  
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                <label>¿El proyecto tiene competidores directos? </label>
                                <select name="indCompe" class="form-control col-lg-12">
                                    
                                    <option value="t">Si</option>
                                    <option value="f">No</option>
                                    
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Ganancia esperada (en pesos colombianos):</label>
                                    <input type="number" name="ganancia" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Fase del proyecto</label>
                                    <select name="fase" class="form-control col-lg-6">
                                    
                                    <option value="Propuesta">Propuesta</option>
                                    <option value="En curso">En curso</option>
                                    <option value="Terminada">Terminada</option>
                                   
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Enlace de un pdf con información detallada del proyecto</label>
                                    <input type="text" name="urlPdf" class="form-control" required>
                                 
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Enlace de un video del proyecto</label>
                                    <input type="text" name="urlVideo" class="form-control" required>
                                 
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Fecha de terminación de la recaudación</label>
                                    <input type="date" name="fechaCancelacion" step="1" min="2018-11-17" max="2019-11-17" value="2018-11-17" class="form-control col-lg-6" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Valor solicitado (en pesos colombianos)</label>
                                    <input type="number" name="valor" class="form-control col-lg-6" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Guardar</button>
                                <button class="btn btn-default">Cancelar</button>
                            </div>
                        </form>
            </div>
        </div>
 


</body>
</html>