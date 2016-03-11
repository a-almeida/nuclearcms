<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*CONFIG DEFAULT_CONTROLLER*/
$route['default_controller'] = INDEXMODULE; //defined on public/index.php 
$route['404_override'] = INDEXMODULE;
/***************************************/
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];



