<?php
namespace Teacherportal\Framework\Http;

use FastRoute\RouteCollector;
use Teacherportal\Framework\Http\Request;
use Teacherportal\Framework\Http\Response;
use FastRoute\Dispatcher;
use function FastRoute\simpleDispatcher;


class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector){
            $routes = include BASE_PATH . "\\routes\\web.php";
            //dd($routes);
            foreach($routes as $route)
            {
             $routeCollector->addRoute(...$route);
            }
           });

      
        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo(),
        );

    //    //  dd($routeInfo);

    //     //[$status, $handler, $vars] = $routeInfo;
    //     [$status, [$controller, $method], $vars] = $routeInfo;


    //     $response = call_user_func_array([new $controller, $method], $vars);
    //     //$response = (new $controller())->$method($vars);

    //     //return $handler($vars);
    //     return $response;
    switch ($routeInfo[0]) {
        case Dispatcher::NOT_FOUND:
            // Handle 404 Not Found
            $response = new Response('404 - Not Found', 404);
            break;
        case Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // Handle 405 Method Not Allowed
            $response = new Response('405 - Method Not Allowed', 405);
            break;
        case Dispatcher::FOUND:
            [$status, [$controller, $method], $vars] = $routeInfo;
            $response = call_user_func_array([new $controller, $method], $vars);
            break;
    }

    return $response ?? new Response('Internal Server Error', 500); // Default response if none matched
         
    }
}