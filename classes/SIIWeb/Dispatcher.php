<?php
namespace SIIWeb;

class Dispatcher {
  public static function dispatch($path_info) {
    $path_info = explode('/',$path_info);
    array_shift($path_info);

    $count = count($path_info);
    if($count==1) {
      $controller_class = 'SIIWeb\Controller\Main';
      $page = $path_info[0];
    }
    else if($count==2) {
      $controller_class = 'SIIWeb\\Controller\\'.ucfirst($path_info[0]);
      $page = $path_info[1];
    }
    else {
      $controller_class = 'SIIWeb\\Controller\\'.ucfirst($path_info[0]).'\\'.ucfirst($path_info[1]);
      $page = $path_info[2];
    }

    if(!class_exists($controller_class)) {
      $controller_class = 'SIIWeb\Controller\Main';
      $page = "index";
    }

    $controller = new $controller_class();
    if(!$page) {
      $page = "index";
    }

    if (method_exists($controller,$page)) {
      $controller->$page();
    }
    else {
      echo "method doesn't exist - controller_class: $controller_class  - method $page";
    }
  }
}
?>
