<?php
namespace Teacherportal\Framework\Http;

use Teacherportal\Framework\Http\Exception\ViewNotFoundException;

class Response
{
    public function __construct(
        private string $view_prefix = '',
        private array $view_params = [], 
        private int $status = 200,
        private array $headers = []
    )
    {
        $this->headers[] = 'Content-Type: text/html; charset=utf-8';
    }

    public static function view(
        string $view_prefix = '',
        array $view_params = [],
    ): static
    {
       return new static($view_prefix, $view_params);
    }

    public function send(): void
    {    
        $path = VIEW_PATH . $this->view_prefix . '.tail.php';
        extract($this->view_params);
        
         if(! file_exists($path))
         {
           throw new ViewNotFoundException();
         }
         ob_start();
         http_response_code($this->status);
         foreach ($this->headers as $header) {
             header($header);
         }
         include $path;
         echo ob_get_clean();
    }

    public function redirect(string $routeStr)
    {
      header('Location: '. BASE_URL . $routeStr);
      exit; 
    }
    
    public function __toString()
    {
      return $this->view();
    }

    public function __get(string $name)
    {
      return $this->params[$name] ?? null;
    }
}