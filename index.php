<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$params=explode('/',$_GET['p']);

if (isset($params[0]) & !empty($params[0])) 
{
	$controller=ucfirst($params[0])."Contro";
	if (file_exists("controller/API_".$controller.".php")) 
	{	
		
		require_once 'controller/API_'.$controller.".php";
		$obj=new $controller();
		if (isset($params[1]) & !empty($params[1])) 
		{
			if (method_exists($obj,$params[1] )) 
			{
				$action=$params[1];
				
				if (isset($params[2]) & !empty($params[2])) 
				{
					$obj->$action($params[2]);
				}else
				{
					$obj->$action();
				}
			}else
			{
				echo "this method doesn't exist";
			}
		}

	}else
	{
		echo "this page doesn't exsit";
	}
	
}