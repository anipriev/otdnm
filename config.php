<?php

// Запрет прямого обращения к файлу
defined ('OTDYHNAMORE') or die ('Access denied');

// Домен
define ('PATH','http://otdnk.ru');

//Модель
define ('MODEL','model/model.php');

//Контроллер
define ('CONTROLLER','controller/controller.php');

//Папка с картинками
define ('USERFILES',PATH.'/userfiles/');

//Виды
define ('VIEW','views/');

// Активный шаблон
define ('TEMPLATE',VIEW.'otdyhnamore/');

//Максимальный размер картинки
define('SIZE', 1048576);

// Сервер БД
define ('HOST','localhost');

// Пользовател БД
define ('USER','host1344758');

// Пароль
define ('PASS','2751130');

// БД
define ('DB','host1344758_onk2');

// Название магазина - title
//define ('TITLE','Сельхозтехника');

//Папка шаблона админки
define ('ADMIN_TEMPLATE','views/admin/');

//Папка административной части
define ('ADMIN','manager/');

mysql_connect (HOST, USER, PASS) or die ('No connect to Server');
mysql_select_db(DB) or die ('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die ('Cant set charset');
?>