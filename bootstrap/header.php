<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Hoteles <font face="AR BLANCA">Wilson</font> </a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
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
