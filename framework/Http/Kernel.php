<?php
namespace Teacherportal\Framework\Http;

use FastRoute\RouteCollector;
use Teacherportal\Framework\Http\Request;
use Teacherportal\Framework\Http\Response;
use FastRoute\Dispatcher;
use Teacherportal\Framework\Http\Database;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public Database $db;

    public function __construct(array $config)
    {
         try {
            // Initialize the Database instance with the database configuration
            $this->db = new Database($config['db']);
        } catch (\Exception $e) {
            // Handle database initialization error
            throw new \Exception("Database initialization error: " . $e->getMessage());
        }
    }

    public function handle(Request $request): Response
    {
        // Define the dispatcher to handle routing
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector){
            // Include the routes from a separate routes file
            $routes = include BASE_PATH . "\\routes\\web.php";
          
            // Iterate over each route and add it to the route collector
            foreach($routes as $route)
            {
             $routeCollector->addRoute(...$route);
            }
           });
        
        // Dispatch the request to the appropriate route handler   
        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),  // Get the HTTP method of the request
            $request->getPathInfo(), // Get the path info of the request
        );
      
   //dd($routeInfo);
    switch ($routeInfo[0]) {
        case Dispatcher::NOT_FOUND:
            // Handle 404 Not Found
            $response = new Response('404 - Not Found', [] ,404 );
            break;
        case Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // Handle 405 Method Not Allowed
            $response = new Response('405 - Method Not Allowed', [], 405);
            break;
        case Dispatcher::FOUND:
            [$status, [$controller, $method], $vars] = $routeInfo; 
            $response = call_user_func_array([new $controller, $method], $vars);
            //dd($response);
            break;
    }

    return $response ?? new Response('Internal Server Error', 500); // Default response if none matched
         
    }

    function getBaseUrl() {
        // Check if HTTPS or HTTP
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
        // Get the host name
        $host = $_SERVER['HTTP_HOST'];
    
        // Get the script name and remove the script part
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $scriptDir = str_replace(basename($scriptName), '', $scriptName);
    
        // Normalize the directory separators (use forward slash)
        $scriptDir = str_replace('\\', '/', $scriptDir);
    
        // Construct the base URL
        $baseUrl = $scheme . $host . $scriptDir;
    
        // Ensure there is a trailing slash
        $baseUrl = rtrim($baseUrl, '/') . '/';
    
        return $baseUrl;
    }

    
}