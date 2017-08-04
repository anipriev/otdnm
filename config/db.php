<?php

mysql_connect (HOST, USER, PASS) or die ('No connect to Server');
mysql_select_db(DB) or die ('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die ('Cant set charset');

