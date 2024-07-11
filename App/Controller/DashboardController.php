<?php
namespace App\Controller;

use App\Model\Mark;
use Teacherportal\Framework\Http\Response;
use Teacherportal\Framework\Http\Request;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class DashboardController extends Response
{

    public function index(): Response
    {
        session_start();
        if(!isset($_SESSION['email']))
        {
            Response::redirect('');
        }
       $markRecords = (new Mark)->fetchRecords();
     
       // Create a Pagerfanta adapter with the result set
       $adapter = new ArrayAdapter($markRecords);

       // Create the Pagerfanta object
       $pagerfanta = new Pagerfanta($adapter);

       // Set the current page
       $pagerfanta->setCurrentPage(1);

       // Set the max per page
       $pagerfanta->setMaxPerPage(20);

       //dd($pagerfanta);
       return Response::view("dashboard", ['records' => $markRecords]);
    }

}