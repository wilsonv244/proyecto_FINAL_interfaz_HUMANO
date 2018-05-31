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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body class="fondo">
    <!-BARRA DE LA TIENDA->
    <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Hotel y Tienda Online <font face="AR BLANCA">Wilson</font> </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-right" href="">Regresar AL Hotel Wilson</a></li>
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
          <!-CARRUSEL DE LOS PRODUCTOS DE LATIENDA>
          <div class="row">
    <div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="14"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="15"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="16"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="17"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="18"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="19"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="20"></li>
                   
                 </ol>
       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">

                <div class="item active">
                  <img src="imagenes/portada/wilsonP.png" alt="..." >
                  <div class="carousel-caption">
                    TIENDA ONLINE WILSON
                  </div>
                </div>
           
                <div class="item">
                  <img src="imagenes/portada/f11.png" alt="...">
                  <div class="carousel-caption">
                    FREE!!
                  </div>
                </div>
            
                <div class="item">
                  <img src="imagenes/portada/f4.png" alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
            
                <div class="item">
                  <img src="imagenes/portada/f5.png" alt="...">
                  <div class="carousel-caption">
                    JUEGOS
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f6.png" alt="...">
                   <div class="carousel-caption">
                     JUEGOS
                   </div>
                </div>
            
                <div class="item">
                   <img src="imagenes/portada/f7.png" alt="...">
                   <div class="carousel-caption">
                    JUEGOS
                   </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f8.png" alt="...">
                  <div class="carousel-caption">
                    Extra
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f9.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f10.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f12.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f13.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f14.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f15.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f16.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f17.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f18.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f19.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f20.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f21.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>

                <div class="item">
                  <img src="imagenes/portada/f22.png" alt="...">
                  <div class="carousel-caption">
                    Musica
                  </div>
                </div>
            
                <div class="item">
                  <img src="imagenes/portada/f23.png" alt="...">
                  <div class="carousel-caption">
                    Sistemas
                  </div>
                </div>
              </div>
              <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
       </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
       </a>
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
<!CONTENIDO->
      <div style="background-color: black;">
        <div class="container">
        <br>
                   <p style="color: white" align="center">
                           Un gestor (o administrador o acelerador) de descargas es un programa diseñado para descargar archivos de Internet, ayudado de distintos medios como algoritmos o formas más sencillas, para ir pausando y reanudando las descargas de algún servidor FTP o página de Internet. Es muy recomendable su utilización cuando se trata de archivos grandes, tales como imágenes ISO; programas; vídeos; música; etc.

                           A diferencia de un navegador (que permite navegar por las páginas de la web, siendo la función de descarga de menos importancia), un gestor de descargas permite automatizar la descarga de varios archivos de acuerdo a parámetros de configuración. En particular, un gestor de descargas se puede utilizar para hacer una réplica de un sitio web completo.
                  </p>
        <br><br><br>
        </div>
</div>
           
           <div class="container">
             <h2 style="color: white; font-family: AR DELANEY; font-size: 280%;" align="center">Lo Mas Descargado del Día</h2> 
           </div>
           
      <hr width="90%">
      <div class="container">
            <div class="row" style="color: white">
             <div class="col-md-2">
                   <img src="imagenes/iconos/mario.jpg" height="250" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Mario Bross</h3>                   
             </div>
             <div class="col-md-2">
                   <img src="imagenes/iconos/images.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Call Of Dutty</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/iconos/dota.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Dota 2</h3>                 
             </div>
             <div class="col-md-2">
                   <img src="imagenes/iconos/minecraf.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Minecraft</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/iconos/fifa.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Fifa 18</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/iconos/st.png" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Star Craft</h3>                  
             </div>
            </div>
      </div>
      <hr width="90%">
      <br>   
                <a href="pagmusica.php"><img src="imagenes/portada/f26.png" height="200" class="img-responsive img-rounded" alt=""/></a>        

       <div id="block" data-vide-bg="video/VI8" data-vide-options="muted: false, position: 0% 0%," >
            <br><br><br><br><br><br>      
             <br>
              <div class="row">      
               <div class="col-md-12">
                  <h2 style="color: white; font-family:AR DELANEY; font-size: 280%;" align="center">Lo Mas Descargado De Spotify</h2>  
               </div>
              </div>
          <hr width="90%">
          <div class="container">
            <div class="row">
             <div class="col-md-2">
                   <img src="imagenes/artistas/a1.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Enrique Iglesias</h3>                   
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a2.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">MonstaX</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a3.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Luis Fonsi</h3>                 
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a4.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.A.P</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a5.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.T.S</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a6.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Nicky Jam</h3>                  
             </div>
            </div>
      </div>
      <hr width="90%">
      <br><br>
      <div class="row">
                  <div class="col-md-4">                             
                  <img src="imagenes/portada/f24.png" height="200" class="img-responsive img-rounded" alt=""/>
                  </div>                                                
                  <div class="col-md-4">                                 
                  </div>                                            
                  <div class="col-md-4">
                   <img src="imagenes/Wilson-Hotel-logo-web.png"  class="img-responsive img-rounded" alt=""/>                              
                  </div>                      
            </div>                        
       </div> 
              
                <a href="pagvideojuegos.php"><img src="imagenes/portada/f27.png" height="200" class="img-responsive img-rounded" alt=""/></a>    
                
<div id="block" data-vide-bg="video/VI10" data-vide-options="muted: true, position: 0% 0%," >
            <br><br><br><br><br><br>      
             <br>
              <div class="row">      
               <div class="col-md-12">
                  <h2 style="color: white; font-family: Cooper Black; font-size: 280%;"; align="center">Comprar Juegos De Steam</h2>  
               </div>
              </div>
          <hr width="90%">
          <div class="container">
            <div class="row">
             <div class="col-md-2">
                   <img src="imagenes/artistas/j1.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Enrique Iglesias</h3>                   
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/j2.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">MonstaX</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/j3.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Luis Fonsi</h3>                 
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/j4.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.A.P</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/j5.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.T.S</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/j6.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Nicky Jam</h3>                  
             </div>
            </div>
      </div>
      <hr width="90%">

      <br><br>
      <div class="row">
                  <div class="col-md-4">                             
                  <img src="imagenes/portada/f28.png" height="200" class="img-responsive img-rounded" alt=""/>
                  </div>                                                
                  <div class="col-md-4">                                 
                  </div>                                            
                  <div class="col-md-4">
                   <img src="imagenes/Wilson-Hotel-logo-web.png"  class="img-responsive img-rounded" alt=""/>                              
                  </div>                      
            </div>                        
       </div>

      <br><br><br><br><br>
      <div class="container">
        <p style="color: white; font-family: AR BERKLEY; font-size: 180%;" align="center">
                Un gestor (o administrador o acelerador) de descargas es un programa diseñado para descargar archivos de Internet, ayudado de distintos medios como algoritmos o formas más sencillas, para ir pausando y reanudando las descargas de algún servidor FTP o página de Internet. Es muy recomendable su utilización cuando se trata de archivos grandes, tales como imágenes ISO; programas; vídeos; música; etc.

                A diferencia de un navegador (que permite navegar por las páginas de la web, siendo la función de descarga de menos importancia), un gestor de descargas permite automatizar la descarga de varios archivos de acuerdo a parámetros de configuración. En particular, un gestor de descargas se puede utilizar para hacer una réplica de un sitio web completo.
      </p>
      </div>
      <br><br><br><br><br>
              

<div class="container">
            <div class="row">
             <div class="col-md-2">
                    
                     <img src="imagenes/artistas/a2.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">MonstaX</h3>   
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a2.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">MonstaX</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a3.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Luis Fonsi</h3>                 
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a4.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.A.P</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a5.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">B.T.S</h3>                  
             </div>
             <div class="col-md-2">
                   <img src="imagenes/artistas/a6.jpg" height="200" class="img-responsive img-rounded" alt=""/>
                   <a href="registroT.php" class="btn  btn-block btn-success active">DESCARGAR</a>
                   <h3 align="center">Nicky Jam</h3>                  
             </div>
            </div>
      </div>



      <?php include("comentario.php"); ?>
</div>
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
