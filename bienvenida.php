<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap IPW</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php include("header.php"); ?>
<div class="jumbotron">
		<div class="container">
			<?php 
				echo "Bienvenido a nuestro sitio ";
				echo $_REQUEST['usuario'];
			?>
		</div>
</div>
<?php include("footer.php"); ?>
<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
