<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;
use Teacherportal\Framework\Http\Database;
use Teacherportal\Framework\Http\CodeTest;

class HomeController extends Response
{

    public function index(): Response
    {
      //CodeTest::insertIntoDB();
      return Response::view("home");
    }

}