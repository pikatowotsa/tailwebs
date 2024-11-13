<?php
declare(strict_types=1);

//Working on my_branch.

// Disable error reporting
//error_reporting(0);

define('BASE_PATH', dirname(__FILE__));
define('VIEW_PATH', BASE_PATH .'/resources/views/');

use Teacherportal\Framework\Http\Kernel;
use Teacherportal\Framework\Http\Request;

require_once __DIR__ . '\vendor\autoload.php';

// Create a new Dotenv instance for loading environment variables from the .env file
$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
// Load the environment variables from the .env file into the environment
$dotenv->load();

//Get database configuration settings
$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
     ]
    ];

// Receive Request
$request = Request::createFromGlobals();

// Initialize Kernel and inject database configuration as parameter
$kernel = new Kernel($config);

define('BASE_URL', $kernel->getBaseUrl());

//Send the content
$response = $kernel->handle($request);
//dd($response);
$response->send();