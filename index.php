<?php

  require_once 'view/View.php';
  require_once 'view/ViewUnderConstruct.php';
  require_once 'view/ViewContact.php';
  require_once 'controller/Controller.php';
  require_once 'controller/ControllerHome.php';
  require_once 'controller/ControllerContact.php';

  $app = Controller::routes();
  $app->start();
  $app->getView();