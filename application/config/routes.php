<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
// Pagina
$route['principal'] = 'Welcome/index';
$route['quienes_somos'] = 'Welcome/quienes_somos';
$route['politicas_de_privacidad'] = 'Welcome/politicas_de_privacidad';
$route['contactanos'] = 'Welcome/contactanos';
$route['comercializacion'] = 'Welcome/comercializacion';
//usuarios
$route['login'] = 'Welcome/login';
$route['registro'] = 'Welcome/registro';
$route['verifico_nuevoregistro'] = 'registro_controller';
$route['verifico_usuario'] = 'loginController';
$route['cerrar_sesion'] = 'loginController/cerrar_sesion';
//Productos
$route['agregaproducto'] = 'producto_controller/form_agrega_producto';
$route['muestraeliminados'] = 'producto_controller/muestra_eliminados';
$route['muestraproductos'] = 'producto_controller';
$route['verifico_nuevoproducto'] = 'producto_controller/agrega_producto';
$route['productos_todos'] = 'producto_controller';
$route['productos_modifica/(:num)'] = 'producto_controller/modificar_producto/$1';
$route['productos_elimina/(:num)'] = 'producto_controller/eliminar_producto/$1';
$route['productos_modifica/(:num)'] = 'producto_controller/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)'] = 'producto_controller/modificar_producto/$1';
$route['productos_activa/(:num)'] = 'producto_controller/activar_producto/$1';



$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
