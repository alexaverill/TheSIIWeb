<?php
namespace SIIWeb;

define('SIIWeb\ROOT', __DIR__ . '/');
define('DEFAULT_PAGE', '/index');

$class_root = ROOT . 'classes';
require_once($class_root . '/SIIWeb/ClassLoader.php');
ClassLoader::register($class_root);
