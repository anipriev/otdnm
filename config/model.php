<?php

defined('OTDNM') or die('Access denied');

/* ===Редирект=== */

function redirect($http = false) {
    if ($http)
        $redirect = $http;
    else
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    header("Location: $redirect");
    exit;
}

function print_arr($array) {
    echo "<pre>" . print_r($array, true) . "</pre>";
}

/* ===Фильтрация входящих данных === */

function clear($var) {
    $var = strip_tags($var);
    return $var;
}

/* ===Фильтрация входящих данных === */

/* Функция транслита с кирилицы на латиницу */

function transliterate($input) {
    $gost = array(
        "Є" => "YE", "І" => "I", "Ѓ" => "G", "і" => "i", "№" => "-", "є" => "ye", "ѓ" => "g",
        "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D",
        "Е" => "E", "Ё" => "YO", "Ж" => "ZH",
        "З" => "Z", "И" => "I", "Й" => "J", "К" => "K", "Л" => "L",
        "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R",
        "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "X",
        "Ц" => "C", "Ч" => "CH", "Ш" => "SH", "Щ" => "SHH", "Ъ" => "'",
        "Ы" => "Y", "Ь" => "", "Э" => "E", "Ю" => "YU", "Я" => "YA",
        "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
        "е" => "e", "ё" => "yo", "ж" => "zh",
        "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l",
        "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
        "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "x",
        "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "",
        "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
        " " => "_"
    );

    return strtr($input, $gost);
}
/* Функция получения рекомендованных объектов*/
function recomended(){
    /*$query = "SELECT id, name FROM properties WHERE published = '1' AND date_end >= CURDATE() AND date_start <= CURDATE() AND id IN (SELECT pty_id FROM pty_recomended WHERE date_end >= CURDATE() AND date_start <= CURDATE() ORDER BY position)";*/
    $query = "SELECT t2.id, t2.name, t2.stars FROM pty_recomended t1 LEFT JOIN properties t2 ON t2.id = t1.pty_id WHERE t1.date_end >= CURDATE() AND t1.date_start <= CURDATE() ORDER BY t1.position";
    $res = mysql_query($query) or die(mysql_query());
	
	$recomended = array();
	while($row = mysql_fetch_assoc($res)){
		$recomended[] = $row;
		}

	return $recomended;
}

/* Функция получения популярных объектов */
function populars(){
	$query = "SELECT t1.*, t2.ptype_name FROM properties t1 LEFT JOIN pty_types t2 ON t1.ptytype_id = t2.id WHERE t1.published = '1' AND t1.date_end >= CURDATE() AND t1.date_start <= CURDATE() ORDER BY t1.rating DESC LIMIT 8";
	$res = mysql_query($query) or die(mysql_query());
	
	$populars = array();
	while($row = mysql_fetch_assoc($res)){
		$populars[] = $row;
		}

	return $populars;
}
