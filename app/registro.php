<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro</title>
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
<script type="text/javascript">
function mostrar(id) {
	if (id == "empresa") {
		$("#empresa").show();
		$("#persona").hide();
	}
	
	if (id == "persona") {
        $("#empresa").hide();
        $("#persona").show();
	}
	
}
</script>
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
                    <a href="index.html" class="btn btn-primary">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registro</h3>
                    
                </div>
                <div class="form-group">
                <label>Tipo de Usuario: </label>
<form action="index.php" method="post">
    
    <select id="status" name="tipo" onChange="mostrar(this.value);">
        
        
        <option value="empresa">Empresa o negocio (Persona Juridica)</option>
        <option value="persona">Individuo (Persona Natural)</option>
     </select>
</form>
  </div>


 <!--Formulario para la persona-->               
                <div class="hpanel" class="element">
                    
<div id="empresa" class="element" style="display: none;">
	<h2>Persona jurídica</h2>
    <form action="GuardarEmpresa.php" method="post" >
                            <div class="row">
                            <div class="form-group col-lg-12">
                                    <label>NIT</label>
                                    <input class="form-control" name='id' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Nombre</label>
                                    <input class="form-control" name='nombre' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Dirección de correo electrónico</label>
                                    <input class="form-control col-lg-12"  name='correo' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Área de estudio o experiencia</label>
                                    <select name="areac" class="form-control col-lg-6">
                                    
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
                                <label>Tiempo en el área de estudio o experiencia: </label>
                                <select name="tiemar" class="form-control col-lg-12">
                                    <option>Seleccione... </option>
                                    <option value="Menos de 1">Menos de un año</option>
                                    <option value="Entre dos y cinco">Entre dos y cinco años</option>
                                    <option value="Seis o mas">Seis o más años</option>
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Fecha de creación de la empresa</label>
                                    <input type="date" name="fecha" step="1" min="1800-01-01" value="2000-01-01" class="form-control col-lg-12" required>
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Contraseña</label>
                                    <input type="password" name="clave" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repita la contraseña</label>
                                    <input type="password" name="confirmar" class="form-control" required>
                                </div>    
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Guardar</button>
                                <button class="btn btn-default">Cancelar</button>
                            </div>
                        </form>
            </div>
        </div>
 


<!--Formulario para la empresa-->
                
                <div id="persona" class="panel-body" class="element">

	<h2>Persona natural</h2>
    <form action="GuardarRegistro.php"  method="post">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                    <label>Cédula</label>
                                    <input class="form-control" name='id' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Nombre</label>
                                    <input class="form-control" name='nombre' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Apellido</label>
                                    <input class="form-control" name='apellidos' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Dirección de correo electrónico</label>
                                    <input class="form-control col-lg-12" name='correo' required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Área de estudio o experiencia</label>
                                    <select name="areac" class="form-control col-lg-6">
                                    <option>Seleccione... </option>
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
                                <label>Tiempo en el área de estudio o experiencia: </label>
                                <select name="tiemar" class="form-control col-lg-12">
                                    <option>Seleccione... </option>
                                    <option value="Menos de 1">Menos de un año</option>
                                    <option value="Entre dos y cinco">Entre dos y cinco años</option>
                                    <option value="Seis o mas">Seis o más años</option>
                                </select>
                                </div>
                                <div class="form-group col-lg-6">
                                <label>Sexo: </label>
                                <select name="sexo" class="form-control col-lg-6">
                                    <option>Seleccione... </option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="fecha" step="1" min="1928-01-01" max="2000-12-31" value="2000-01-01" class="form-control col-lg-6" required>
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="clave" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Vuelva a escribir la contraseña</label>
                                    <input type="password" name="confirmar" class="form-control" required>
                                </div>
                                
                                
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Guardar</button>
                                <button class="btn btn-default">Cancelar</button>
                            </div>
                        </form>





</body>
</html>