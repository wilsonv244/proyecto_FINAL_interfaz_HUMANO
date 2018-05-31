<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hotel Wilson</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sociales.css">
    <link rel="stylesheet" type="text/css" href="Rsociales/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilost.css">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="fondo">
    </div>
  	<!– LA BARRA DE NAVEGACION–>
	<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Hotel y Tienda Online <font face="AR BLANCA">Wilson</font> </a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-right" href="indexT.php">Visite nuestra Tienda Online</a></li>
				<li><a class="navbar-right" href="Buscanos.php">Buscanos</a></li>
				<li><a  a data-toggle="modal" data-target="#myModal4" role="button"">Acceder</a></li>

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

       <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
				<div class="modal-dialog modal-sm" role="document">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Iniciar de sesión</h4>
					</div>
					<div class="modal-body">
						<form  id="login_form" class="form-vertical" action="none" method="post">
							<p><input type="text" name="usuario" placeholder="Usuario"></p>
							<p><input type="password" name="password" placeholder="Password"></p>
							<p><button type="submit" name="login" class="btn btn-success">Acceder</button></p>
						</form>
						<div class="login-help">
							<a href="#">Recordar contrase&ntilde;a</a>
						</div>
					</div>
					<div class="modal-footer">
						¿Usuario nuevo?
						<a href="registro.php" class="btn btn-primary">Regístrate</a>
					</div>
				  </div>
				  
				</div>
			  </div>		  

		<div class="social">
      <ul>
        <li><a href="http://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
        <li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
        <li><a href="mailto:wilsonwindows123@gmail.com" target="icon-mail" class="icon-google-plus3"></a></li>
        <li><a href="http://www.instagram.com" target="_blank" class="icon-instagram"></a></li>
        <li><a href="http://www.vk.com" target="_blank" class="icon-vk"></a></li>
      </ul>
      
    </div>
	<!-RESERVACION-CLIC->
	
	<div class="jumbotron"  >
		<div class="container">
			<img src="imagenes/Wilson-Hotel-logo-web.png" width="300" height="100" >
		 	<font face="AR BLANCA"><h1 align="center" >Listos para hacer una reservacion...</h1></font>
			<font face="Baskerville Old Face"><h2 align="center">Reserva una habitacion con un solo clic</h2></font>
		
			<p align="center"> 
				<a class="btn btn-primary btn-lg" href="registro.php" role="button">Reservar</a></p>
			<!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

			  <!-- Modal -->
			  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="MySmallModalLabel" >
				<div class="modal-dialog modal-sm" role="document">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Iniciar de sesión</h4>
					</div>
					<div class="modal-body">
						<form  id="login_form" class="form-vertical" action="none" method="post">
							<p><input type="text" name="usuario" placeholder="Usuario"></p>
							<p><input type="password" name="password" placeholder="Password"></p>
							<p><button type="submit" name="login" class="btn btn-success">Acceder</button></p>
						</form>
						<div class="login-help">
							<a href="#">Recordar contrase&ntilde;a</a>
						</div>
					</div>
					<div class="modal-footer">
						¿Usuario nuevo?
						<a href="registro.php" class="btn btn-primary">Regístrate</a>
					</div>
				  </div>
				  
				</div>
			  </div>		  
			  
			  
		</div>
	</div>
	<!-CORTINA de IMAGENES->
	 
	 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagenes/hotel.png" alt="First slide" width="1600" height="900">
          <div class="container">
            <div class="carousel-caption">
              <h1><font face="Old English Text MT">Ubicado en el centro de la Cuidad</font>
              </h1>
              <p>Ubicado en el centro de la cuidad.</p>
               <p align="center"><a class="btn btn-primary btn-lg" href="registro.php" role="button">Reservar</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagenes/cuarto.jpg" alt="Second slide" width="1600" height="600">
          <div class="container">
            <div class="carousel-caption">
              <h1>Un cuarto para dos personas</h1>
              <p>Disfruta la comodidad de dos camas y una terraza con vista al lago</p>
              <p align="center"><a class="btn btn-primary btn-lg" href="registro.php" role="button">Reservar</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagenes/hw.jpg" alt="Third slide" width="1600" height="900">
          <div class="container">
            <div class="carousel-caption">
              <font face="AR BLANCA"><h1>Con una gran recepcion.</h1></font>
              <p>Con una sala de espera que se acomoda a todos los gustos de los clientes.</p>
               <p align="center"><a class="btn btn-primary btn-lg" href="registro.php" role="button">Reservar</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

	 <!-COMIDA TIENDA->
	   <hr class="featurette-divider" id="comidas">

      <div class="row featurette" id="comida">
        <div class="col-md-5">
        
          <font face="Cooper Black" color="white"><h2 class="featurette-heading"><p style="padding-left: 100px">Restaurants. <span class="text-muted">Una gran variedad de comida peruana.</span></h2></p> </font>
          <font face="Constantia" color="white"><p class="lead" style="padding-left: 100px">Una opción diferente con personalidad propia, informal y relajada, donde encontrará el mejor valor por su dinero, ubicado en el primero piso del hotel..</p></font>
      <font face="Cooper Black"><p align="center"><a class="btn btn-primary btn-lg" href="registro_food.php" role="button">Comprar U Ordenar</a></p></font> 
          
        </div>
        <div class="col-md-7">
          <img width="500" height="500" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="imagenes/Rest.jpeg" data-holder-rendered="true"  class="rounded-circle">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <font face="Cooper Black" color="white"><h2 class="featurette-heading" style="padding-right: 100px">Disfrute de Nuestro servicio de sauna. <span class="text-muted">Un momento de placer</span></h2></font>
          <font face="Constantia" color="white"><p class="lead" style="padding-right: 100px" >Siente la comodidad de nuestros servicios de salud, y hara que encuentra la paz interior de su aura, con un confort y comodidad, esta ubicado en la terraza del Hotel.</p></font>
         <font face="Cooper Black"><p align="center"><a class="btn btn-primary btn-lg" href="ENPROCESO.php" role="button">Hacer una reservacion</a></p></font> 
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img width="500" height="500" class="featurette-image img-responsive center-block"  data-src="holder.js/500x500/auto" alt="500x500" src="imagenes/sauna.jpg" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <font face="Cooper Black" color="white"><h2 class="featurette-heading"><p style="padding-left: 100px">Grupos y Salones <span class="text-muted">PLANIFIQUE SU PRÓXIMO EVENTO.</span></h2></p></font>
          <font face="Constantia" color="white"><p class="lead" style="padding-left: 100px">Motive a sus colegas y organice una reunión de negocios o evento corporativo con tecnología de punta y servicio profesional. Si usted tiene que realizar un evento déjelo en manos de expertos,. Tenemos 20 años de experencia organizando los eventos más importantes en Lima.</p></font>
           <font face="Cooper Black"><p align="center"><a class="btn btn-primary btn-lg" href="ENPROCESO.php" role="button">Hacer una reservacion</a></p></font> 
        </div>
        <div class="col-md-4">
          <img class="featurette-image img-responsive center-block" width="500" height="500" data-src="holder.js/500x500/auto" alt="500x500" src="imagenes/serviciosE.jpg" data-holder-rendered="true">
        </div>
      </div>
	
  <?php include("comentario.php"); ?>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrapvalidator.min.js"></script>
	<script src="js/val.js"></script>
  <script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

 <script src="./Carousel Template for Bootstrap_files/jquery.min.js.descarga"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js.descarga"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Carousel Template for Bootstrap_files/holder.min.js.descarga"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.js.descarga"></script>

  </body>
</html>
