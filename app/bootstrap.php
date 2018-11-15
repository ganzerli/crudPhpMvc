<?php

// load config
  require_once 'config/config.php';
  // Load Libraries
  //require_once 'libraries/core.php';
  //require_once 'libraries/controller.php';
  //require_once 'libraries/database.php';

  //AUTOLOAD CORE LIBRARIES

    spl_autoload_register(function($className){
      // filename needs to match the className
      require_once 'libraries/' . $className . '.php';
    });
    //this requires automatically the file needed!!