<?php

/**
 * bootstrap file
 */

define('DROOT', dirname(dirname(dirname(__FILE__))).'/');
define('APP', DROOT.'app/');
define('LIB', APP.'libs/');

define('TEST', 1);

//various constants and app logic
include_once APP.'configs/app.php';

//main class
include LIB.'FrontController.php';
//main view class
include LIB.'Template.php';
//main controller class
include LIB.'Controller.php';
//main model class
include LIB.'Model.php';

//helper functions
include_once(APP . 'helpers/main.php');


