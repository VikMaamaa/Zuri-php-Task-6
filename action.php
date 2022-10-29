<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );
require 'classes/Dbh.php';
require 'classes/UserAuth.php';
require 'classes/Route.php';

$route = new formController();

$route->handleForm();