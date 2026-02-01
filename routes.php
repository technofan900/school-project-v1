<?php

// Base Pages
$router->get('/', 'index.php');
$router->get('/password', 'about.php');

$router->get('/login', 'login/login.php');

$router->get('/register', 'register/show.php');
$router->post('/register', 'register/create.php');

$router->get("/pop_up", 'register/popup.php');