<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width"> 
  <meta charset="UTF-8">
	<title>CONSULTA FACTURA ELECTRONICA</title>
	<link rel="stylesheet" href="Ccs/estilos.css">
    <link href="img/logo2.ico" type="image/x-icon" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    
    <center>
    <a href="#"><img src="img/head.jpg" alt="FalconMasters" width="1200" align="middle"></a>
    </center>
    
  <!-- <style type="text/css"> 
	body{ 
	background-image: url(IMG/fondo.jpg); 
	background-repeat : no-repeat; 
	background-attachment : fixed; 
	} 
	</style>-->
    
    <style>
			body
			{
				margin-top:0px;
				border: 1px solid rgba(0, 0, 0, 0);				
			
				background:url(IMG/fondo.jpg) no-repeat center fixed;
				background-size:cover;
				height:100%;
				width:100%;
				z-index:-1;
				position:fixed;
			}
		</style>
   
</head>
<body>
 <p>&nbsp;</p>   
<section class="main">
		<div class="wrapp">            
           	<!--<form  class='login' align="center" id="login" method="post" action="BAJAR_ARCHIVO2.php"> -->
             
  <form  class='login' align="center" id="login">   
             <h1 align="center">Consulta de Documentos</h1>   
              <p>&nbsp;</p>   
			<p align="left">
                  <label>NRO RUC:</label>
                  <input id="RUC" name="RUC" type="text" class="form-control" placeholder="RUC - Ej.: 00000000000" required>  
              </p>
<p>&nbsp;</p>  
                  
                 <p align="left">
                
                  <label>TIPO DOCUMENTO:</label>
              
                   <select class="form-control" id="TIPO_DOC" name="TIPO_DOC" required>
                        	<option value="" readonly>Seleccione...</option>
                            <option value="01" readonly>FACTURA</option>
                            <option value="03" readonly>BOLETA</option>
                            <option value="07" readonly>NOTA CREDITO</option>
                            <option value="08" readonly>NOTA DEBITO</option>
                            
                 </select>
                 </p>    
                  <p>&nbsp;</p>   
                  
                   <p align="left">
                  <label>TIPO ARCHIVO:</label>
              
                   <select class="form-control" id="TIPO_ARCHIVO" name="TIPO_ARCHIVO" required>
                        	<option value="" readonly>Seleccione...</option>
                            <option value="PDF" readonly>PDF</option>
                            <option value="XML" readonly>XML</option>
                            <option value="CDR" readonly>CDR</option>
                           
                            
                 </select>
                 </p>    
                  <p>&nbsp;</p>   
                  
                <p align="left">
                  <label>NRO. DOCUMENTO:</label>
                
                  <input id="NRO_DOC" type="text" class="form-control" name="NRO_DOC" placeholder="Nro. - Ej.: F001-00000001" required>                                       
                </p>
             <p>&nbsp;</p>  
             
               <p align="center">
             <!--<div style="float:left; border:#000 solid 0px; width:215px; height:105px;">-->
                      <!--  <div style=" float:left; padding-bottom:5px; width:100%;">-->
                          <img src="Includes/Plugins/cool-php-captcha-0.3.1/captcha.php" id="captcha" style="border:#DFDFDF solid 1px;" width="50%" height="60"/>
                    <!--    </div>-->
                      <!--  <div style="float:left; width:100%;">-->
               <input type="text" name="TxtCaptchaR" id="TxtCaptchaR" autocomplete="off" style="width:50%; border:#ccc solid 1px; height:35px; padding:10px;" required="required" placeholder="Captcha"/>               
<p align="center">                 <!--   </div>-->
                 <!--  </div>-->
                 <!-- <div style="float:right; border:#DFDFDF solid 1px; height:100px; width:95px; margin-left:5px; padding:10px;">-->
                 <a href="javascript:RecargarCaptcha()" value="Nuevo">
                 <img src="Includes/Plugins/cool-php-captcha-0.3.1/recargar.jpg" style="border:#DFDFDF solid 0px; height:35px;" title="Actualizar Captcha"/></a>               
               <p align="center">
                 <!-- </div>  -->                
                 <!--  </div>-->
                 
                 <!-- <input id="DESCARGAR" name="DESCARGAR" type="submit" value="DESCARGAR" onclick="VER_ARCHIVO()"> -->
                 <button onclick="VER_ARCHIVO()">DESCARGAR</button>  
                 
                 
               </div>              
                                                  
               		 <!--  <button onclick="VER_ARCHIVO()">VER DOCUMENTO</button>-->
                     
                     
                       
			</form>
            	
            		
		  <p>&nbsp;</p>			
		</div>
	</section>

<?php include('footer.php');?> 
</body>
</html>
<script>

	
		function VER_ARCHIVO(){		
			
			
			RUC = document.getElementById("RUC").value;	
			if (RUC == ''){
			alert('DEBE INGRESAR UN NUMERO RUC');			
			return;
			}
						
			TIPO_DOC = document.getElementById("TIPO_DOC").value;	
			if (TIPO_DOC == ''){
			alert('DEBE INGRESAR UN TIPO DE DOCUMENTO');			
			return;
			}
			
            NRO_DOC = document.getElementById("NRO_DOC").value;			
			DOCUMENTO =NRO_DOC;
			if (NRO_DOC == ''){
			alert('DEBE INGRESAR UN NUMERO DE DOCUMENTO');			
			return;
			}
			
			TIPO_ARCHIVO = document.getElementById("TIPO_ARCHIVO").value;	
			if (TIPO_ARCHIVO == ''){
			alert('DEBE INGRESAR UN TIPO DE ARCHIVO');			
			return;
			}
			
			if (TIPO_ARCHIVO == 'PDF'){
			INI =''
			EXT ='.pdf'				
			}
			
			if (TIPO_ARCHIVO == 'XML'){
			INI =''
			EXT ='.zip'				
			}
			
			if (TIPO_ARCHIVO == 'CDR'){
			INI ='R'
			EXT ='.zip'				
			}			
			
			VarCaptcha=VerificarCaptchaR();
			
			if(VarCaptcha==0)
			{
				alert('DISCULPE, EL CAPTCHA INGRESADO NO ES CORRECTO.');
				//window.parent.MostrarMensaje("Rojo", "Disculpe, Disculpe, el Captcha ingresado no es correcto.");
				$("#TxtCaptcha").focus();
				return;					
			}		
			NB='ARCHIVOS/'+INI+RUC+'-'+TIPO_DOC+'-'+DOCUMENTO+EXT;			
			
			Parametros="RUC="+RUC+"&TIPO_DOC="+TIPO_DOC+"&NRO_DOC="+NRO_DOC+"&TIPO_ARCHIVO="+TIPO_ARCHIVO;			
			//alert(Parametros);
				//return;
				$.ajax(
				{
					type: "POST",
					//dataType:"html",
					url: "BAJAR_ARCHIVO.php",			
					data: Parametros, 
					async: false,	
					beforeSend: function() 					
				
					{	
					},	
							
					success: function(result)	
					{						
						
						//return;
						//alert(result);
						if(result==0)
						{
							alert('DISCULPE, EL ARCHIVO NO EXISTE');
							 
							 window.parent.Cargando(0);
						}
						else
						{
							 //alert('CORRECTO');
							 window.open(NB, 'Download');	
						}
					}	
				});
				
				return VarCaptcha;				
							
        }
				
		function VerificarCaptcha()
			{
				var VarCaptcha=0;
				//TxtCaptcha = document.getElementById("TxtCaptcha").value
				var TxtCaptcha = $('#TxtCaptchaR').val();
				
				parametros='TxtCaptcha='+TxtCaptcha;
				//alert(parametros)
				//return;
				$.ajax(
				{
					type: "POST",
					dataType:"html",
					url: "Includes/Plugins/cool-php-captcha-0.3.1/verificar.php",			
					data: parametros, 
					async: false,	
					beforeSend: function() 
					{
						window.parent.Cargando(1);
					},			
					success: function(result)
					{						
						//alert(result);
						if(result==0)
						{
							 VarCaptcha=result;
							 
							 window.parent.Cargando(0);
						}
						else
						{
							 VarCaptcha=result;
						}
					}	
				});
				
				return VarCaptcha;
			}
			
			function VerificarCaptchaR()
			{
				var VarCaptcha=0;
				var TxtCaptcha = $('#TxtCaptchaR').val();
				
				parametros='TxtCaptcha='+TxtCaptcha;
				//alert(parametros)
				//return;
				$.ajax(
				{
					type: "POST",
					dataType:"html",
					url: "Includes/Plugins/cool-php-captcha-0.3.1/verificar.php",			
					data: parametros, 
					async: false,	
					beforeSend: function() 
					{	
					},			
					success: function(result)
					{						
						//alert(result)
						if(result==0)
						{
							 VarCaptcha=result;
							 
							 window.parent.Cargando(0);
						}
						else
						{
							 VarCaptcha=result;
						}
					}	
				});
				
				return VarCaptcha;
			}
	
			function RecargarCaptcha()
			{
				document.getElementById('captcha').src='Includes/Plugins/cool-php-captcha-0.3.1/captcha.php?'+Math.random();
				$('#TxtCaptcha').val('');
				$('#TxtCaptcha').focus();
			}
	
			function RecargarCaptchaR()
			{
				document.getElementById('captchaR').src='Includes/Plugins/cool-php-captcha-0.3.1/captcha.php?'+Math.random();
				$('#TxtCaptchaR').val('');
				$('#TxtCaptchaR').focus();
			}	
		
</script>

