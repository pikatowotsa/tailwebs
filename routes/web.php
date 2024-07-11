<?php

use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PostsController;
use App\Controller\AuthController;
use App\Controller\DashboardController;
use App\Controller\LogoutController;

return [
    ['GET', '/' , [HomeController::class, 'index']],
    ['GET', '/user' , [LoginController::class, 'index']],
    ['GET', '/posts/{id:\d+}' , [PostsController::class, 'show']],
    ['GET', '/dashboard', [DashboardController::class, 'index']],
    ['POST', '/auth', [AuthController::class, 'index']],
    ['GET', '/logout', [LogoutController::class, 'index']]
];