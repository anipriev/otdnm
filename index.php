<?php

// запрет прямого обращения
define('OTDNM', TRUE);

//Подключение файла конфигурации
require_once 'config/config.php';

// Подключение БД
require_once 'config/db.php';

// Подключение контроллера
require_once 'config/controller.php';