<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;
use Teacherportal\Framework\Http\Database;
use Teacherportal\Framework\Http\CodeTest;

class LogoutController extends Response
{

    public function index(): Response
    {
      session_start();
      unset($_SESSION['email']);

      $_SESSION['flash_message'] = "You've successfully logout";
      Response::redirect('');
    }

}