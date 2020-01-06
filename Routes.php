<?php

    // Route::set('index.php', function()
    // {
    //   Index::CreateView('Index');
    // });

    Route::set('home', function() {
      ControllerList::CreateView('ViewList');
    });

    Route::set('contact-us', function() {
      ControllerContact::CreateView('ViewContact');
    });

    Route::set('signin', function() {
      ControllerSignin::CreateView('ViewSignin');
    });

    Route::set('signup', function() {
      ControllerSignup::CreateView('ViewSignup');
    });

    Route::set('account', function() {
      ControllerAccount::CreateView('ViewAccount');
    });