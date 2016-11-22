<?php

defined('ISHOP') or die("Access denided");

//echo 'Я файл конфигурации';

define('PATH', 'http://ishop/');
define('MODEL', 'model/model.php');
define('CONTROLLER', 'controller/controller.php');
define('VIEW', 'views/');
define('TEMPLATE', VIEW.'ishop/');

define('DB', 'ishop');
define('HOST', '127.0.0.1');
define('USER', 'ishop_user');
define('PASS', '1234');

define('TITLE', 'Интернет магазин сотовых телефонов');

mysql_connect(HOST, USER, PASS) or die('No connect to Server');
mysql_select_db(DB) or die('No connect to db');
mysql_query("set names utf8") or die('Cant set charset');
