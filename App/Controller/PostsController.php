<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;

class PostsController extends Controller
{
    public function show(int $id): Response
    {
        $content = "This is post $id";
        return new Response($content);
    }
}