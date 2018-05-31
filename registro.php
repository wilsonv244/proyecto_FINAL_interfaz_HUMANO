<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap IPW</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/miestilo.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>

 
<script src="js/moment.min.js"></script>
 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body background="registro2.jpg" >

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
	 	
    <form class="well form-horizontal" action="" method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<img src="imagenes\Wilson-Hotel-logo-web.png">
		
		<legend><label class="col-md-3 control-label">Registro de Reserva</label> </legend>
		<!-- Text input-->
		
		<div class="form-group">
		  <label class="col-md-4 control-label">Nombres</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="nombres" placeholder="Nombres" class="form-control"  type="text">
			</div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Apellidos</label> 
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="apellidos" placeholder="Apellidos" class="form-control"  type="text">
			</div>
		  </div>
		</div>
		
		<div class="form-group"> 
			<label class="col-lg-4 control-label">Fecha de entrada</label>
			<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="text" class="form-control" name="datetimepicke" id="datetimepicker" data-date-format="YYYY-MM-DD" />
				</div>
 		</div>
 	</div>


 		<div class="form-group"> 
			<label class="col-lg-4 control-label">Fecha de Salida</label>
			<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="text" class="form-control" name="datetimepicker" id="datetimepicker" data-date-format="YYYY-MM-DD" />
				</div>
 		</div>
 	</div>

 	
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input name="email" placeholder="Correo electrónico" class="form-control"  type="text">
			</div>
		  </div>
		</div>


		<!-- Text input-->
			   
		<div class="form-group">
		  <label class="col-md-4 control-label">Teléfono</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="telefono" placeholder="990 000000" class="form-control" type="text">
			</div>
		  </div>
		</div>

		<!-- Text input-->
			  
		<div class="form-group"> 
		  <label class="col-md-4 control-label">Habitacion</label>
			<div class="col-md-4 selectContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select name="direccion" class="form-control selectpicker" >
			  <option value=" " >Elija una opcion...</option>
			  <option>Suite De Luxe-Matrimonial</option>
			  <option>Habitacion Cuadruple</option>
			  <option >Habitacion Triple</option>
			  <option >Doble Matrimonial</option>
			  <option >Suite Presidencial</option>
			  
			</select>
		  </div>
		</div>
		</div>

		<div class="form-group"> 
		  <label class="col-md-4 control-label">Menu</label>
			<div class="col-md-4 selectContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select name="menu" class="form-control selectpicker" >
			  <option value=" " >Elija una opcion...</option>
			  <option>Papa a la huancaina</option>
			  <option>Causita a la chalaca</option>
			  <option >Coctel de Langostino Bolívar</option>
			  <option >Ceviche de pescado</option>
			  <option >Pisco sour</option>
			  <option>Pisco sour con biondi</option>
			  
			</select>
		  </div>
		</div>
		</div>
		<!--<div class="form-group">
		  <label class="col-md-4 control-label">Ciudad</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="ciudad" placeholder="Ciudad" class="form-control"  type="text">
			</div>
		  </div>
		</div>-->
		 
		

		<!--  <div class="form-group"> 
		  <label class="col-md-4 control-label">Departamento</label>
			<div class="col-md-4 selectContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select name="departamento" class="form-control selectpicker" >
			  <option value=" " >Elija un departamento...</option>
			  <option>Arequipa</option>
			  <option>Cuzco</option>
			  <option >Lima</option>
			  <option >Moquegua</option>
			  <option >Tacna</option>
			  
			</select>
		  </div>
		</div>
		</div>-->
		   
		

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">Sitio web</label>  
		   <div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
		  <input name="website" placeholder="Sitio web" class="form-control" type="text">
			</div>
		  </div>
		</div>

		<!-- radio checks<div class="form-group">
			<label class="col-md-4 control-label">Género</label>
				<div class="col-md-4">
					<div class="radio">
						<label>
							<input type="radio" name="genero" value="yes" /> Femenino
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="genero" value="no" /> Masculino
						</label>
					</div>
				</div>
		</div> -->
		
		<div class="form-group">
		  <label class="col-md-4 control-label">Personas</label>  
		   <div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user 	"></i></span>
				<select name="personas" class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
		  
			</div>
		  </div>
		</div> 

		<!-- Text area -->
		
				


		<div class="form-group">
		  <label class="col-md-4 control-label">Intereses</label>
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<textarea class="form-control" name="comentario" placeholder="Intereses..."></textarea>
		  </div>
		  </div>
		</div>

		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Felicidades! <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por registrarse...</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
			<button type="button" id="btnSubmit" class="btn btn-warning"  >Registrar <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
		</form>
		</div>
    </div><!-- /.container -->
	
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
<div><nav class="navbar navbar-inverse"></div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrapvalidator.min.js"></script>
	<script src="js/val.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
  </body>
</html>
