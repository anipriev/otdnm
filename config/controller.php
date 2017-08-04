<?php

defined ('OTDNM') or die ('Access denied');

session_start();

// Подключение модели
require_once 'model.php';

$url = ltrim($_SERVER['REQUEST_URI'], '/');

//echo ($url);
foreach ($routes as $route) {
	if( preg_match($route['url'], $url, $match) ){
		$controller = $route['view'];
		break;
	}
}
//if( empty($match) ){
//	include 'views/404.php';
//    $view = 'main';
//	exit;
//}
//print_arr($match);

//extract($match);

$recomended = recomended(); //рекомендованные объекты
$populars = populars(); //Популярные объекты

// поключение полученного контроллера
if (file_exists('controllers/'.$controller.'Controller.php')){
    require_once 'controllers/'.$controller.'Controller.php';
}else{
    include TEMPLATE.'tmpl/page404.html';
    exit;
};
// Подключение основного шаблона
require_once TEMPLATE.'index.php';