<?php

// Запрет прямого обращения к файлу
defined ('OTDNM') or die ('Access denied');

// поключение модели
require_once 'models/'.$controller.'Model.php';

$properties = properties($config['limit_prop_main_page']);

$view = 'main';