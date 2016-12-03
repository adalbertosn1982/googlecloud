<?PHP

define("dir_server","C:/wamp/www/ProjetosWeb/projetotest");

define("host",$_SERVER['HTTP_HOST']);
define("url_server",$_SERVER['PHP_SELF']);

define("uri",rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));
define("controler_inicial",'/controlers/controler_inicial.php');

//echo host.uri.controler_inicial;

// header("Location: http://$host$uri/$extra");

include_once dir_server.controler_inicial; 
?>