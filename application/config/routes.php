<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//================================================================================product video
$route['product/audio'] = 'frontend/product/audio_visual';
$route['product/refrigenerator'] = 'frontend/product/refrigenerator';
$route['product/washing'] = 'frontend/product/washing_machine';
$route['product/ac'] = 'frontend/product/ac';
$route['product/home-app'] = 'frontend/product/home_app';
$route['product/smartphone'] = 'frontend/product/smartphone';



//================================================================================frontend
$route['login'] = 'frontend/authentication/login';
$route['valid-login'] = 'frontend/authentication/valid_login';
//Count Visitor Product
$route['visit-product-category'] = 'frontend/visitor/visit_product_category';
$route['visit-buy'] = 'frontend/visitor/visit_buy';

//Games
$route['games/register'] = 'frontend/games/register';
$route['games/play'] = 'frontend/games/play';
$route['games/success'] = 'frontend/games/success';
$route['games/failed'] = 'frontend/games/failed';


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
