<?php

use App\Controller\HomeController;
use App\Controller\UserController;
use App\Controller\PostsController;

return [
    ['GET', '/' , [HomeController::class, 'index']],
    ['GET', '/user' , [UserController::class, 'index']],
    ['GET', '/posts/{id:\d+}' , [PostsController::class, 'show']],
];