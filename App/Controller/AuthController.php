<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;
use Teacherportal\Framework\Http\Database;
use Teacherportal\Framework\Http\Services\Csrf;
use App\Model\User;

class AuthController extends Response
{

    // "email" => "admin@test.com"
    // "password" => "admin123"
 
    public function index()
    {
        // Start session
        session_start();

        //Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Retrieve and sanitize input values
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            
            $csrf = new Csrf();
            $csrf->generateToken();
            //dd($_SESSION['csrf_token']);
            
            if($this->authenticate($email,$password))
            {
                $_SESSION['email'] = $email;
                Response::redirect('dashboard');
                exit();
            }
            $_SESSION['flash_message'] = "Login UnSuccessful. Please login again!";
         
            Response::redirect('');
        }
    }

    public function authenticate(String $email, String $password): bool
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $userRecord = (new User)->fetchRecord($email);
        if(isset($userRecord) && password_verify($password, $userRecord["password"]))
        {
            return true;
        }
        return false;
    }
}