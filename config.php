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

// БД
define ('DB','otdnm');

// Название магазина - title
//define ('TITLE','Сельхозтехника');

//Папка шаблона админки
//define ('ADMIN_TEMPLATE','views/admin/');

//Папка административной части
//define ('ADMIN','manager/');

mysql_connect (HOST, USER, PASS) or die ('No connect to Server');
mysql_select_db(DB) or die ('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die ('Cant set charset');
?>