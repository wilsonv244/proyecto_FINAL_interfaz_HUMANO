<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=no , initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>Bootstrap IPW</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/miestilo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>

	<script src="js/Ajax.min.js"></script>
	<script src="Js/jquery.ripples.js"></script>
 
<script src="js/moment.min.js"></script>
		

<style type="text/css">
	* { margin: 0; padding: 0; }
html {
	height: 100%;
}
body {

	background-image: url(imagenes/image/18.jpg);
	/*para que las img se ven igual sin importar el tamaño*/ 
	background-size: cover;
	background-attachment: fixed;
	height: 100%;
}

</style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>


<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Hoteles <font face="AR BLANCA">Wilson</font> </a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" data-toggle="modal" data-target="#login-modal">Inicio</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Restaurant</a></li>
						<li><a href="#">Carta</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="#">Servicios especiales</a></li>
					</ul>
				</li>
				<li><a data-toggle="modal" data-target="#myModal" role="button">Contactenos</a></li>
				
			</ul>
		</div>
		
		
	</div>
	</nav>

	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
          <div class="modal-dialog" role="document" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel" align="center" style="color: black"><b> Contactos Y Consultas</b></h3>
              </div>
              <div class="modal-body">
                      <h4 align="center" style="color: #494A4A"><b>Telefono</b>: 943216543</h4>
                      <br>
			          <div class="input-group">
		                <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
		                <textarea class="form-control" name="comentario" placeholder="Escribir tu Consulta" class="form-control"  rows="5">
		                </textarea>
			          </div>
              </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
             <button type="button" class="btn btn-info">Enviar</button>
           </div>
         </div>
       </div>
       </div>

	
	 <div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
	<form class="well form-horizontal" action="" method="post"  id="contact_form" style="background-color: #212222;color: #939C9C;">
		<fieldset>
		<!-- Form Name -->
		<legend style="color: white" > <h3 align="center">Comprar Producto</h3></legend>
		<form action="guardarT.php" method="POST" class="form-register">
		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-3 control-label">Nombres y apellidos</label>
		  <div class="col-md-9 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="name" placeholder="Nombres" class="form-control"  type="text">
			</div>
		  </div>
		</div>

		<!-- Text input-->

		<!-- Select Basic -->
		   
		<div class="form-group"> 
		  <label class="col-md-3 control-label">Juegos o Programas</label>
			<div class="col-md-9 selectContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select name="play" class="form-control selectpicker" >
			  <option value=" " >Seleccione una opcion</option>
			  <option >Call of dutty</option>
			  <option >Star Craft II</option>		  
			  <option >Dota 2</option>
			  <option >Diablo IV</option>
			  <option >GTA V</option>
			  <option >Resident Evil VII</option>			
			  
			</select>
		  </div>
		</div>
		</div>
        
        <div class="form-group"> 
			<label class="col-lg-3 control-label">Fecha de entrada</label>
			<div class="col-md-9 inputGroupContainer">
				<div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="text" class="form-control" name="datetimepicke" id="datetimepicker" data-date-format="YYYY-MM-DD" />
				</div>
 		</div>
 	</div>

        <div class="form-group" >
			        
			        <div class="col-md-3">
			                <label class="control-label">Género</label>
			        </div>			        
				    <div class="col-md-4">
					    <div class="radio">
						   <label>
							  <input type="radio" name="genero" value="yes" /> Femenino
						   </label>
					    </div>					
				    </div>
				    <div class="col-md-5">
					    <div class="radio">
						    <label>
							      <input type="radio" name="genero" value="no" /> Masculino
						    </label>
					   </div>
				    </div>

		</div>
		<!-- Button -->
		<div class="form-group">
		  <div class="col-md-12">
		    <p align="center"><button type="button" id="btnSubmit" class="btn btn-warning"  >  Registrar <span class="glyphicon glyphicon-send"></span></button></p>			
		  </div>
		</div>

		</fieldset>
		</form>
			</div><div class="col-md-4"></div>
		</div>
	</div>
</fieldset>
</form>
<!--
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
				<h3>Aula Virtual</h3>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			</div>
			<div class="col-md-6">
				<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
				<h3>Ejemplos de Aplicaciones Web</h3>
				<p>Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Lorem ipsum dolor.</p>
			</div>
			<div class="col-md-3">
				<span class="glyphicon glyphicon-console" aria-hidden="true"></span>
				<h3>Plantillas Gratis</h3>
				<p>Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			</div>
		</div>
	</div>
-->

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrapvalidator.min.js"></script>
	<script src="js/val.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
  </body>
</html>
