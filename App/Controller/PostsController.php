<?php
namespace App\Controller;

use Teacherportal\Framework\Http\Controller;
use Teacherportal\Framework\Http\Response;

class PostsController extends Controller
{
    public function show(int $id): Response
    {
        $content = "This is post $id";
        $people = array(
            array(
                'name' => 'John Doe',
                'age' => 28,
                'date_of_birth' => '1996-05-15'
            ),
            array(
                'name' => 'Jane Smith',
                'age' => 34,
                'date_of_birth' => '1990-03-22'
            ),
            array(
                'name' => 'Emily Johnson',
                'age' => 25,
                'date_of_birth' => '1999-08-30'
            )
        );
   
        $price = 45.40;
        return Response::view("user", [ 
            'people' => $people,
            'price' => $price
         ]);
    }
}