<?php

  class ControllerHome extends Controller
  {
    protected $_view;

    public function __construct()
    {
      $this->_view = new View();
    }

    public function start()
    {
      $this->_view->build_page();
    }
  }