<?php
namespace SIIWeb\Controller;

use SIIWeb\Controller as Controller;

class Main extends Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/index.html');
  }

  public function team() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/team.html');
  }

  public function purpose() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/purpose.html');
  }

  public function projects() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/projects.html');
  }

  public function news() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/news.html');
  }

  public function contact() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/contact.html');
  }

  public function projectsWintermute() {
    echo $this->view->render(\SIIWeb\ROOT . 'static/template/projects-wintermute.html');
  }
}
