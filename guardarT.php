<?php
include("insertT.php");
$name=$_POST["name"];
$play=$_POST["play"];
$datetimepicke=$_POST["datetimepicke"];
$checkuser=mysql_query($conexion,"SELECT *FROM aplicacion WHERE name='$name'");
	if($check_user>0){
		echo '<script>alert("este nombre ya esta siendo usado")
		</script>';
	}
	else{
		$insertar="INSERT INTO aplicacion(name,play,datetimepicke) VALUES ('$name','$play','$datetimepicke')";
		$resultado=mysql_query($conexion,$insertar);
		if(!$resultado){
			echo '<script>alert("No deje los espacios en Blanco")</script>';
		}
		else{
			echo '<script>alert("Registrado exitosamente")</script>';
		}
	}
