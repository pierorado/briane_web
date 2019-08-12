<?php /*?><?php
$NB=$_POST['NB'];
header("Content-disposition: attachment; filename=20538236021-01-F001-00000093.pdf");
header("Content-type: application/pdf");
readfile($NB);
//(echo $NB
?><?php */
//$enlace = archivos"/".$id;
//$NB=$_POST['NB'];
/*$id=$_POST['NB'];
//$id='20538236021-01-F001-00000093.pdf';
$path_a_tu_doc='archivos';
$enlace = $path_a_tu_doc."/".$id.".pdf";
$enlace = $id;
header ("Content-Disposition: attachment; filename=".$id." ");
header ("Content-Type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
//echo ($enlace);*/

?>

<?php
  	//$f = 'archivos/20538236021-01-F001-00000093.pdf';
	$RUC= $_POST['RUC'];
	$TIPO_DOC= $_POST['TIPO_DOC'];
	$NRO_DOC= $_POST['NRO_DOC'];
	$TIPO_ARCHIVO= $_POST['TIPO_ARCHIVO'];
	if ($TIPO_ARCHIVO =='PDF')
	{
		$f = 'ARCHIVOS/'.$RUC.'-'.$TIPO_DOC.'-'.$NRO_DOC.'.pdf';	
	}
	
	if ($TIPO_ARCHIVO =='XML')
	{
		$f = 'ARCHIVOS/'.$RUC.'-'.$TIPO_DOC.'-'.$NRO_DOC.'.zip';	
	}
	
	if ($TIPO_ARCHIVO =='CDR')
	{
		$f = 'ARCHIVOS/'.'R'.$RUC.'-'.$TIPO_DOC.'-'.$NRO_DOC.'.zip';	
	}
	
	if (file_exists($f))
		{
			/*header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=\"$f\"\n");
			$fp=fopen("$f", "r");			
			fpassthru($fp);*/
			echo 1;
			
		}
		else
		{
			echo 0;
		}	
?>



