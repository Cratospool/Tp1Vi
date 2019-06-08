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
$route['productosCAT/(:num)'] = 'Welcome/productosCAT/$1';
$route['quienes_somos'] = 'Welcome/quienes_somos';
$route['politicas_de_privacidad'] = 'Welcome/politicas_de_privacidad';
$route['contactanos'] = 'Welcome/contactanos';
$route['comercializacion'] = 'Welcome/comercializacion';
//login
$route['login'] = 'loginController/login';
$route['registro'] = 'registro_controller/index';
$route['verifico_nuevoregistro'] = 'registro_controller';
$route['verifico_usuario'] = 'loginController';
$route['cerrar_sesion'] = 'loginController/cerrar_sesion';
//Productos
$route['agregaproducto'] = 'producto_controller/form_agrega_producto';
$route['muestraeliminados'] = 'producto_controller/muestra_eliminados';
$route['muestraproductos'] = 'producto_controller';
$route['verifico_nuevoproducto'] = 'producto_controller/agrega_producto';
$route['productos_activa/(:num)'] = 'producto_controller/activar_producto/$1';
$route['productos_modifica/(:num)'] = 'producto_controller/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)'] = 'producto_controller/modificar_producto/$1';
$route['verDetalle/(:num)'] = 'producto_controller/ver_detalle/$1';
$route['productos_elimina/(:num)'] = 'producto_controller/eliminar_producto/$1';
//usuarios
$route['agregausuario'] = 'usuario_controller/form_agrega_usuario';
$route['muestrausuarioseliminados'] = 'usuario_controller/muestra_eliminados';
$route['usuarios_todos'] = 'usuario_controller';
$route['verifico_nuevousuario'] = 'usuario_controller/agrega_usuario';
$route['usuarios_activa/(:num)'] = 'usuario_controller/activar_usuario/$1';
$route['usuarios_modifica/(:num)'] = 'usuario_controller/muestra_modificar/$1';
$route['verifico_modificausuario/(:num)'] = 'usuario_controller/modificar_usuario/$1';
$route['usuarios_elimina/(:num)'] = 'usuario_controller/eliminar_usuario/$1';
$route['mi_perfil/(:num)'] = 'usuario_controller/ver_perfil/$1';
//carrito
$route['carrito'] = 'carrito_controller/electrodomesticos';
$route['carrito_agrega'] = 'carrito_controller/add';
$route['comprar'] = 'carrito_controller/muestra_compra';
$route['confirma_compra'] = 'carrito_controller/guarda_compra';
$route['carrito_actualiza'] = 'carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
//consulta
$route['muestraventas'] = 'producto_controller/listar_ventas';
$route['muestra_detalle/(:num)'] = 'producto_controller/muestra_detalle/$1';
//reclamos
$route['consultas'] = 'consultaController';
$route['verifico_nuevaconsulta'] = 'consultaController/agrega_reclamo';
$route['consulta_elimina/(:num)'] = 'consultaController/eliminar_consulta/$1';
$route['consulta_activa/(:num)'] = 'consultaController/activar_consulta/$1';
$route['muestra_eliminadosConsulta'] = 'consultaController/muestra_eliminados';







$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
