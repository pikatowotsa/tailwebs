<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $content = '<h2>Hello World</h2>';
        $content = Controller::view();
        return new Response($content);
    }
}