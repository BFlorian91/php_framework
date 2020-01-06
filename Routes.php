<?php

    // Route::set('index.php', function()
    // {
    //   Index::CreateView('Index');
    // });

    Route::set('list', function() {
      ControllerList::CreateView('ViewList');
    });