<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$Confpath = str_replace('Http/routes.php', '', str_replace('\\', '/', __FILE__));
require $Confpath.'Config/admin_routes.php';
require $Confpath.'Config/app_routes.php';