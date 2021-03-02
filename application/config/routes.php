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

// shoppe live 
$route['shoppe'] = 'frontend/shoppe/index';



//================================================================================frontend
$route['login'] = 'frontend/authentication/login';
$route['valid-login'] = 'frontend/authentication/valid_login';
//Count Visitor Product
$route['visit-product-category'] = 'frontend/visitor/visit_product_category';
$route['visit-buy'] = 'frontend/visitor/visit_buy';

//Games
$route['games/register'] = 'frontend/games/register';
$route['games/save'] = 'frontend/games/save';
$route['games/play'] = 'frontend/games/play';
$route['games/success'] = 'frontend/games/success';
$route['games/failed'] = 'frontend/games/failed';

//Feedback
$route['feedback/form'] = 'frontend/feedback/feedback_form';
$route['feedback/question-1'] = 'frontend/feedback/feedback_q1';
$route['feedback/question-2'] = 'frontend/feedback/feedback_q2';
$route['feedback/question-3'] = 'frontend/feedback/feedback_q3';
$route['feedback/question-4'] = 'frontend/feedback/feedback_q4';
$route['feedback/question-5'] = 'frontend/feedback/feedback_q5';
$route['feedback/question-6'] = 'frontend/feedback/feedback_q6';
$route['feedback/question-7'] = 'frontend/feedback/feedback_q7';
$route['feedback/question-8'] = 'frontend/feedback/feedback_q8';
$route['feedback/question-9'] = 'frontend/feedback/feedback_q9';
$route['feedback/save'] = 'frontend/feedback/feedback_save';
$route['feedback/results'] = 'frontend/feedback/feedback_results';
$route['feedback/share'] = 'frontend/feedback/feedback_share';
$route['feedback/share/results'] = 'frontend/feedback/feedback_share_results';

$route['feedback/sample'] = 'frontend/feedback/feedback_sample';

//Photobooth
$route['photobooth/screen'] = 'frontend/photobooth/photobooth_screen';

//Api
$route['api/requestToken'] = 'api/api/reqToken';
$route['api/end'] = 'api/api/endGame';


//================================================================================backend
$route['dashboard/logout'] = 'backend/dashboard/logout';
$route['dashboard'] = 'backend/dashboard/dashboard';
$route['dashboard/voucher'] = 'backend/voucher/main';
$route['dashboard/voucher/add'] = 'backend/voucher/add';
$route['dashboard/voucher/edit/(:any)'] = 'backend/voucher/edit';
$route['dashboard/voucher/save'] = 'backend/voucher/save';
$route['dashboard/feedback'] = 'backend/feedback/main';
$route['dashboard/game'] = 'backend/game/main';
$route['dashboard/visitor-buy'] = 'backend/visitorbuy/main';
$route['dashboard/visitor-daily'] = 'backend/visitordaily/main';
$route['dashboard/visitor-daily-history'] = 'backend/visitordaily/history';
$route['dashboard/visitor-event-live'] = 'backend/visitoreventlive/main';
$route['dashboard/visitor-product'] = 'backend/visitorproduct/main';
$route['dashboard/visitor-feedback'] = 'backend/visitorfeedback/main';
$route['dashboard/visitor-game'] = 'backend/visitorgame/main';
$route['dashboard/photobooth'] = 'backend/photobooth/main';

//sample code
$route['reqip'] = 'backend/dashboard/reqip';
