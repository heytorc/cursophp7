<?php

spl_autoload_register(function($className){

	$path = "class". DIRECTORY_SEPARATOR .$className.".php";

	if(file_exists($path)){
		
		require_once($path);

	}else{
		
		echo 'arquivo nao encontrado';
		
	}

});

?>