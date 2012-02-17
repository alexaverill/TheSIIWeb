<?php
namespace SIIWeb;

class Template 
{
  private $vars  = array();
 
  public function &__get($name) {
    return $this->vars[$name];
  }
 
  public function __set($name, $value) {
    $this->vars[$name] = $value;
  }
 
  public function render($file) {
    extract($this->vars);
    ob_start();
    include($file);
    return ob_get_clean();
  }
}
?>
