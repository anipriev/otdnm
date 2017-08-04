<?php

defined ('OTDNM') or die ('Access denied');

/* Функция получения объектов для главной страницы сайта */
function properties($limit) {
    $query = "SELECT t1.id, t1.name, t1.stars, t2.town_name AS town, t3.ptype_name FROM properties t1 LEFT JOIN towns t2 ON t1.town_id = t2.town_id LEFT JOIN pty_types t3 ON t1.ptytype_id = t3.id WHERE t1.published = '1' AND t1.date_end >= CURDATE() AND t1.date_start <= CURDATE() ORDER BY rand() LIMIT $limit ";
    $res = mysql_query($query) or die(mysql_query());

    $properties = array();
    while ($row = mysql_fetch_assoc($res)) {
        $properties[$row['id']] = $row;
    }
    return $properties;
}

