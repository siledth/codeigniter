<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['usuarios'] = 'user/Main'; //que apunte al controlador
$route['nuevo-usuario'] = 'user/Add';
$route['nuevo-usuario/save'] = 'user/Add/save';
$route['usuario/(:num)'] = 'user/Edit/index/$1';
$route['usuario/update/(:num)'] = 'user/Edit/update/$1';
$route['usuario/delete/(:num)'] = 'user/Main/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
