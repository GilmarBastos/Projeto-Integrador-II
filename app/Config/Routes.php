<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index'); 

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');

$routes->get('/signin', 'SigninController::index');
$routes->get('/signin/logout', 'SigninController::logout');

$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'ProfileController/store', 'ProfileController::store');

$routes->get('/mailview', 'SendMail::index');
$routes->match(['get', 'post'], 'SendMail/enviarEmail', 'SendMail::enviarEmail');

$routes->get('mensagem', 'Mensagem::index');