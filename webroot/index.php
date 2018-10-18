<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define("WEBROOT", 'http://localhost:8080/daii/mvc01');
define ('VIEWS_PATH', ROOT.DS.'Views');

require_once(ROOT.DS.'lib'.DS.'init.php');

App::run(str_replace("/daii/mvc01","",$_SERVER['REQUEST_URI']));