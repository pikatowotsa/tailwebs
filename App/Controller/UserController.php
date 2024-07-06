<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Response;

class UserController
{
    public function index(): Response
    {
        $content = '<h2>Hello World from User Controller</h2>';
        return new Response($content);
    }
}