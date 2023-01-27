<?php
session_start();
use App\Router;

require __DIR__ . '/../vendor/autoload.php';


$route= new Router();
$route->add('GET','/','App\Controllers\TaskController::getTasks');
$route->add('GET','/task/{}','App\Controllers\TaskController::getTask');
$route->add('POST','/task/{}','App\Controllers\TaskController::updateTask');
$route->add('GET','/task/new','App\View\View::render','add_task');
$route->add('POST','/task/new','App\Controllers\TaskController::addTask');
$route->add('GET','/login','App\View\View::render','login');
$route->add('POST','/login','App\Controllers\AuthController::login');
$route->add('GET','/logout','App\Controllers\AuthController::logout');
$route->start();    
