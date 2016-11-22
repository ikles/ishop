<?php

defined('ISHOP') or die("Access denided");

require_once MODEL;

//получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];

//подкючение вида
require_once TEMPLATE.'index.php';