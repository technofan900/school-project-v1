<?php

// Base Pages
$router->get('/', 'index.php');
$router->get('/password', 'about.php');
$router->get('/register', 'contacts.php');

$router->get('/login', 'login/login.php');