<?php

class View
{

  public function header()
  { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Todo</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/mdb.min.css" rel="stylesheet">
      <!-- Your custom styles (optional) -->
      <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
    <?php
      }

      public function navbar()
      { ?>
      <header>
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
          <!-- SideNav slide-out button -->
          <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
          </div>
          <!-- Breadcrumb-->
          <div class="breadcrumb-dn mr-auto">
            <p>Material Design for Bootstrap</p>
          </div>
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
              <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
    <?php
      }

      public function body()
      { ?>
      <div class="container">

      </div>
    </body>
  <?php
    }

    public function footer()
    { ?>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <p> Florian Beaumont</p>
      </div>

    </footer>
<?php
  }

  
}
