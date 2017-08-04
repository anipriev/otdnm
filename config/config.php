<?php

// Запрет прямого обращения к файлу
defined ('OTDNM') or die ('Access denied');

// Домен
define ('PATH','http://otdnm.ru');

//Модель
//define ('MODEL','models/model.php');

//Контроллер
//define ('CONTROLLER','controllers/controller.php');

//Папка с картинками
define ('USERFILES',PATH.'/userfiles/');

//Виды
define ('VIEW','views/');

// Активный шаблон
define ('TEMPLATE',VIEW.'ver072017/');

//Максимальный размер картинки
define('IMGSIZE', 1048576);

// Сервер БД
define ('HOST','localhost');

// Пользовател БД
define ('USER','host1344758');

// Пароль
define ('PASS','2751130');

// Имя БД
define ('DB','otdnm');

// Название магазина - title
//define ('TITLE','Сельхозтехника');

//Папка шаблона админки
//define ('ADMIN_TEMPLATE','views/admin/');

//Папка административной части
//define ('ADMIN','manager/');
$config = [
    'limit_prop_main_page' => '20',
    'limit_popular' => '10'
];

$routes = array (
    array (
        'url' => '#^property/(?P<property_alias>[a-z0-9-]+)#i',
        'view' => 'property'
    ),
    array (
        'url' => '#^category/(?P<id>\d+)#i',
        'view' => 'category'
    ),
    array (
        'url' => '#^$#i',
        'view' => 'main'
    ),
//    array (
//        'url' => '#^(?P<page_alias>[a-z]+)#i',
//        'view' => 'page'
//    )
);
