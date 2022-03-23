<?php

use Clive\Core\Mantle\App;
use Clive\Core\Database\Connection;
use Clive\Core\Database\QueryBuilder;

require 'helpers.php';
require 'Core/Mantle/Logger.php';
require 'Core/Mantle/Request.php';
require 'Core/Mantle/Router.php';
require 'Core/Mantle/Paginator.php';
require 'Core/Mantle/App.php';
require 'Core/Mantle/Session.php';
require 'Models/Model.php';
require 'Models/User.php';
require 'Core/Mantle/Mail/Mail.php';
require 'Core/Mantle/Mail/Template.php';
require 'Core/Mantle/Auth.php';
require 'Core/Database/Connection.php';
require 'Core/Database/QueryBuilder.php';
require 'Controllers/UserController.php';
require 'Controllers/ClientController.php';
require 'Controllers/PagesController.php';
require 'Controllers/AuthController.php';
require 'Controllers/DatabaseController.php';




//configur config to always point to config.php
App::bind('config', require 'config.php');

/**
 *Bind the Database credentials and connect to the app
 *Bind the requred database file above to 
 *an instance of the connections
 */

session_start();

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['sqlite'])
));



