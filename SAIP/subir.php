<?php 


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&&
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')

{
	$archivo = $_FILES["archivo"]["name"];
	if (!is_dir("fotos/")){
		mkdir("fotos/",0777);
	}
if($archivo && 
	move_uploaded_file($_FILES["archivo"]["tmp_name"],
						"fotos/" .$archivo)){
	sleep(3);
	echo $archivo;
}
}



 


 ?>