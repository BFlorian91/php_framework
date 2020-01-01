<?php

class Controller
{
  protected $_view;

  public function __construct()
  {
    $this->_view = null;
  }

  public static function routes()
  {
    $page = isset($_GET["page"]) ? $_GET["page"] : null;
    switch ($page) {
      case "contact":
        $route = new ControllerContact();
        break;
      default:
        $route = new ControllerHome();
        break;
    }
    return $route;
  }

  public function start()
  { }

  public function getView()
  {
    return $this->_view;
  }
}
