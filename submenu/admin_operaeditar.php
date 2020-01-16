<?php
require '../includes/funciones.php';
include '../includes/conexion.php';
session_start();
$idusuario=$_POST['iduser'];
$tipodoc=$_POST['tipodoc'];
$tiporol=$_POST['tiporol'];

$numero2=$_POST['numero2'];
$numant=$_POST['numant'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

		if (empty($_FILES['foto']['name'])) {
			$editarProfile="UPDATE profile  SET id_numero='$numero2',telefono='$telefono',correo='$correo',nombre='$nombre',paterno='$paterno',materno='$materno' where id_numero=$numant"; 

			$editarUser="UPDATE usuarios SET idtipo='$tipodoc',idrol='$tiporol',clave='$clave' where idusuario=$idusuario";

			$consulta="SELECT u.profile_id_numero,u.idusuario,p.correo from usuarios u INNER JOIN profile p ON u.profile_id_numero=p.id_numero where  (u.profile_id_numero='$numero2' AND u.idusuario=!$idusuario)  or (p.correo='$correo'  AND u.idusuario=!$idusuario)" ;
			
			//seleccion que debe ser verdadera 
			$resultado=mysqli_query($conexion,$consulta);//ejecuta
			$fila=mysqli_num_rows($resultado);
					if ($fila > 0 ) {  //si consigue un dato
							echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
							echo '<script language="javascript">location.href="adminusuarios.php"</script>';
									
						# code...
					}else{
						
						$Edituno=mysqli_query($conexion,$editarProfile);
						if ($Edituno==true) {
							
							$editdos=mysqli_query($conexion,$editarUser);
						}
						if($editdos==true){
							echo '<script language="javascript">alert("usuario modificado");</script>';
							echo '<script language="javascript">location.href="adminusuarios.php"</script>';
							
						}
			
			

					}

		}else{

			$query_select = mysqli_query($conexion,"SELECT imagen from profile WHERE id_numero='$numant'");
		 	while ($res=mysqli_fetch_array($query_select)) {
		 			unlink('../img/profile/'.$res['imagen']);
		 		}

		 		$destino='../img/profile';
			 	$img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
	 			$imgNoticia = $img_nombre.'.jpg';
	 			$src=$destino.$imgNoticia;
			 	copy($_FILES['foto']['tmp_name'],$src);

			 	 $editarProfile="UPDATE profile  SET id_numero='$numero2',telefono='$telefono',correo='$correo',nombre='$nombre',paterno='$paterno',materno='$materno',imagen='$imgNoticia' where id_numero=$numant"; 

			$editarUser="UPDATE usuarios SET idtipo='$tipodoc',idrol='$tiporol',clave='$clave' where idusuario=$idusuario";

			$consulta="SELECT u.profile_id_numero,u.idusuario,p.correo from usuarios u INNER JOIN profile p ON u.profile_id_numero=p.id_numero where  (u.profile_id_numero='$numero2' AND u.idusuario=!$idusuario)  or (p.correo='$correo'  AND u.idusuario=!$idusuario)" ;
			
			//seleccion que debe ser verdadera 
			$resultado=mysqli_query($conexion,$consulta);//ejecuta
			$fila=mysqli_num_rows($resultado);
					if ($fila > 0 ) {  //si consigue un dato
							echo '<script language="javascript">alert("Atencion,ya existe el usuario ");</script>';
							echo '<script language="javascript">location.href="adminusuarios.php"</script>';
									
						# code...
					}else{
						
						$Edituno=mysqli_query($conexion,$editarProfile);
						if ($Edituno==true) {
							
							$editdos=mysqli_query($conexion,$editarUser);
						}
						if($editdos==true){
							echo '<script language="javascript">alert("usuario modificado");</script>';
							echo '<script language="javascript">location.href="adminusuarios.php"</script>';
							
						}
			
			

					}
			

		}


			

		
		
		



?>