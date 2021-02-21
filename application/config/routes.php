<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//================================================================================frontend
$route['login'] = 'frontend/authentication/login';
$route['valid-login'] = 'frontend/authentication/valid_login';
//Count Visitor Product
$route['visit-product-category'] = 'frontend/visitor/visit_product_category';
$route['visit-buy'] = 'frontend/visitor/visit_buy';


//================================================================================backend
$route['dashboard/logout'] = 'backend/dashboard/logout';
$route['dashboard'] = 'backend/dashboard/dashboard';
$route['feedback'] = 'backend/feedback/main';
$route['game'] = 'backend/game/main';
$route['visitor-buy'] = 'backend/visitorbuy/main';
$route['visitor-daily'] = 'backend/visitordaily/main';
$route['visitor-daily-history'] = 'backend/visitordaily/history';
$route['visitor-event-live'] = 'backend/visitorbuy/main';
$route['visitor-product'] = 'backend/visitorbuy/main';

//sample code
$route['reqip'] = 'backend/dashboard/reqip';
