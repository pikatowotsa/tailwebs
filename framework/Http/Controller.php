<?php
declare(strict_types = 1);
namespace Teacherportal\Framework\Http;

use function PHPUnit\Framework\fileExists;
use Teacherportal\Framework\Http\Exception\ViewNotFoundException;

class Controller
{
    public function __construct(
        protected string $view = '',
        protected array $params = []
    )
    {}

    public function view()//: string
    {
        $path = VIEW_PATH . $this->view . '.tail.php';
        if(! fileExists($path))
        {
            throw new ViewNotFoundException();
        }
       // ob_start();
        include VIEW_PATH . $this->view . '.tail.php';
      //  return (string) ob_get_clean();
    }
}