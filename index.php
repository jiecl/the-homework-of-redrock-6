<?php





$pathinfo = $_SERVER['PATH_INFO'];

$pathdata = explode('/', ltrim($pathinfo,"/"));

$controller = ucfirst($pathdata[2])."Controller";
$module = ucfirst($pathdata[0]);
$action = ucfirst($pathdata[1]);
echo $action;
	
$autoload = function ($class) {
	$file =  $class.".class.php";
	if(is_file($file)) {
		require_once $file;
	}
};
spl_autoload_register($autoload);
$controllername = "App\\".$module."\\"."Controller\\".$controller;

$hello = new $controllername();
$hello -> $action(); 
