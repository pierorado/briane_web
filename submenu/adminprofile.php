<?php
session_start();




error_reporting(0);
$inicio=$_SESSION['active'];
if ($inicio==null || $inicio='') {
	header("location:intranet.php");

	die();

}else{
	require '../includes/funciones.php';
include "../includes/conexion.php";


}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta name="viewport"  content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilosp.css">
	<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico_briane.ico">
</head>
<body>
	<header>		 
	 		<nav id="menu1">
	 	
	 		
	 				<div id="toggle-menu">
	 					<img class="logo2" src="../img/logo02.png">
	 					
	 					<label for="tm" ><span class="drop-icon">▾</span></label>
	 				
	 				</div>
	 				<input type="checkbox" id="tm">
	 			<ul class="main-menu clearfix">
	 				<div class="logo22">
	 					<img  src="../img/logo02.png">
	 				</div>
	 				<li ><a href="panel.php">Panel</a></li>
	 				<?php
			if ($_SESSION['rol']== 1) {
			 ?>
			<li><a href="adminoticia.php">Agregar Noticias</a></li>
			<li><a href="adminofertas.php">Agregar ofertas</a></li>
			<li><a href="adminusuarios.php">Usuarios</a></li>
			<?php }else if($_SESSION['rol']== 3){?>
					<li><a href="adminoticia.php">Agregar Noticias</a></li>
				<?php }?>
			<li><a href="adminprofile.php">Perfil</a></li>
			<li><a href="cerrar.php">Cerrar Sesion</a></li>
			 		
	 		</ul>
	 	
	  </nav> 
	</header>
	<div id="contenedor2">
<div class="container py-2 my-3">
	 <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="../img/profile/<?php echo $_SESSION['photo']?>" />

            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                   <div class="row">
			  <div class="col-3">
			    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Datos</a>
			      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
			    </div>
			  </div>
			  
			</div>
                </section>
                
            </div>

        </div>
        <div class="col-md-8">
            <div class="col-12">
			    <div class="tab-content" id="v-pills-tabContent">
			      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			      	 <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    <?php echo $_SESSION['name']?>
                   
       
                </h2>
                
            	</div>
            	<div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h6 class="text-uppercase font-weight-light text-secondary">
                             Información
                        </h6>
                        <dl class="row mt-4 mb-4 pb-3">
                            <dt class="col-sm-3">Apellido Paterno</dt>
                            <dd class="col-sm-9"><?php echo $_SESSION['patern']?></dd>
                            
                            <dt class="col-sm-3">Apellido Materno</dt>
                            <dd class="col-sm-9">
                                <address class="mb-0">
                                    <?php echo $_SESSION['matern']?>
                                </address>
                            </dd>
                            
                            <dt class="col-sm-3">Correo</dt>
                            <dd class="col-sm-9">
                                <a href="mailto:aang.is.kefy@gmail.com"><is class="ke"></is><?php echo $_SESSION['msm']?></a>
                            </dd>
                        </dl>
                        
                        <h6 class="text-uppercase font-weight-light text-secondary">
                            Información Privada
                        </h6>
                        <dl class="row mt-4 mb-4 pb-3">
                        	<dt class="col-sm-3">Tipo de documento</dt>
                            <dd class="col-sm-9"><?php echo $_SESSION['num']?></dd>

                            <dt class="col-sm-3">Contraseña</dt>
                            <dd class="col-sm-9"><?php echo $_SESSION['contra']?></dd>
                            
                            <dt class="col-sm-3">Telefono</dt>
                            <dd class="col-sm-9"><?php echo $_SESSION['telef']?></dd>
                        </dl>
                    </div>
			      </div>
			      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">..4.</div>
			    </div>
			  </div>
            
            
        </div>

</div>

</div>
</div>
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/manta.js"></script>
		<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>