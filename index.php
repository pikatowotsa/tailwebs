<?php
declare(strict_types=1);

define('BASE_PATH', dirname(__FILE__));


require_once __DIR__ . '\vendor\autoload.php';

use Teacherportal\Framework\Http\Kernel;
use Teacherportal\Framework\Http\Request;

// Receive Request
$request = Request::createFromGlobals();

$kernel = new Kernel();

//Send the content
$response = $kernel->handle($request);

$response->send();