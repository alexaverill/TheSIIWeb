<?php
namespace SIIWeb;
require_once(__DIR__ . '/project_conf.php');

$path_info = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : DEFAULT_PAGE;
if($path_info == "" || strlen($path_info) === 1) {
  $path_info = DEFAULT_PAGE;
}

Dispatcher::dispatch($path_info);
?>
