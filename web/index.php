<?php 
require_once('../vendor/autoload.php');
require_once("../core/router.php");
require_once('../config/config.php');

// dossier ou on se trouve
$uri= $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path=substr($dir, strlen($_SERVER['DOCUMENT_ROOT'])-1);
$route = substr($uri, strlen($path));

$loader = new Twig_Loader_Filesystem('../src/views/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => '/path/to/compilation_cache',
));

$router = new Router();
$response = $router->run($route);

echo $response;


?>
