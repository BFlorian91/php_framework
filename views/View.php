<?php

class View
{
  protected $_html_element;

  public function __construct()
  {
    $this->_html_element = null;
  }

  public function header()
  { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Todo</title>
      <link rel="stylesheet" type="text/css" href="lib/styles/main.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    </head>

    <body>
    <?php
  }

  public function navbar()
  { ?>
    <header>
      <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <a href="index.php?" style="width: 40px"><img src="lib/img/logo.png" class="img-fluid" alt="logo"></a>
        <div class="mr-auto">
          <a href="index.php?"><h3 class="mt-1 ml-4 font-weight-bold text-white font-pacifico">TodoApp</h3></a>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item">
            <a href="index.php?page=contact" class="nav-link"><i class="fas fa-envelope text-white"></i><span class="clearfix d-none d-sm-inline-block text-white">Contact</span></a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=" class="nav-link"><i class="far fa-comments text-white"></i><span class="clearfix d-none d-sm-inline-block text-white">Support</span></a>
          </li>
          <li class="nav-item dropleft">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="text-white fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block text-white">Account</span>
            </a>
            <div class="dropdown-menu bg-dark text-white">
              <form class="px-4 py-3">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                        Remember me
                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="#">New around here? Sign up</a>
                <a class="dropdown-item text-white" href="#">Forgot password?</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <div style="height: 150px;"></div>
    <?php
  }

  public function body()
  { ?>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    </body>
    <?php
  }

  public function footer()
  { ?>
    <footer class="page-footer font-small fixed-bottom">

      <div class="footer-copyright text-center py-2">
        <p>©2020 Copyright: Florian Beaumont</p>
      </div>

    </footer>
    <?php
  }

  public function build_page()
  {
    $this->_html_element = $this->header();
    $this->_html_element .= $this->navbar();
    $this->_html_element .= $this->body();
    $this->_html_element .= $this->footer();

    return $this->_html_element;
  }
}