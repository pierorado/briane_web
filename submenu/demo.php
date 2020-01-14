<?php

session_start();


		require '../includes/funciones.php';
		include '../includes/conexion.php';


		$clave=$_POST['clave'];
		$tipo=$_POST['tipo'];

		$numero2=$_POST['numero2'];
		$mensaje =null;

		if ($tipo=='')
		 {
		 	
			$mensaje="<div class='alert alert-danger' role='alert'>Seleccione el tipo de documeto</div>";
		}else if($numero2==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce los numeros</div>";
		}else if($clave==''){
			$mensaje="<div class='alert alert-danger' role='alert'>Introduce tu contraseña</div>";
		}else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/', $clave)){
			$mensaje="<div class='alert alert-danger' role='alert'>La contraseña debe tener entre 8 y 12 caracteres, al menos un dígito, al menos una minúscula.</div>";
		}else{
			header("Content-Type: text/html; charset=utf-8");
		//seleccion que debe ser verdadera 

			$consulta="select u.numero,u.clave,p.nombre,p.imagen ,u.idrol,u.paterno,u.materno from usuarios u  INNER JOIN profile p ON u.numero=p.id_numero where  numero='$numero2' and clave='$clave' and idtipo='$tipo'";

		$resultado=mysqli_query($conexion,$consulta);//ejecuta
		mysqli_close($conexion);
		$fila=mysqli_num_rows($resultado);

				if ($fila > 0 ) {  //si consigue un dato
				$row=mysqli_fetch_array($resultado);
					$_SESSION['active']=true;		
					$_SESSION['num']=$row['numero'];
					$_SESSION['tipo']=$row['idtipo'];
					$_SESSION['rol']=$row['idrol'];
					$_SESSION['name']=$row['nombre'];
					$_SESSION['contra']=$row['clave'];
					$_SESSION['telef']=$row['telefono'];
					$_SESSION['patern']=$row['paterno'];
					$_SESSION['matern']=$row['materno'];
					$_SESSION['msm']=$row['correo'];
					$_SESSION['photo']=$row['imagen'];


						/*header('location:panel.php');*/
					$mensaje="<script>window.location='panel.php'</script>";
					/*echo 1;*/
					
					# code...
				}else{
					/*echo 0;*/
					$mensaje="<div class='alert alert-danger' role='alert'>Los datos no coinciden con nuestros registros. Inténtalo de nuevo</div>";
				
					/*echo "incorrecto credenciales tiene 3 intentos";   /*
					/*echo '<script language="javascript">alert("Credenciales inválidas");</script>';
					echo '<script language="javascript">location.href="intranet.php"</script>';*/
					session_destroy();
					
				}
		}
echo $mensaje;

?>