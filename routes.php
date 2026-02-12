<?php

// Base Pages
$router->get('/', 'index.php');
$router->get('/about', 'about.php');

// Login
$router->get('/login', 'login/show.php');

// Register page
$router->get('/register', 'register/show.php');
$router->post('/register', 'register/create.php');

$router->get("/pop_up", 'register/popup.php');

// Notes page
$router->get("/passwords", "passwords/index.php");
$router->get("/passwords/create", "passwords/create.php");
// Handle creating a new password entry
$router->post('/passwords', 'passwords/store.php');

$router->get("/password", "passwords/show.php");
$router->get("/password/edit", "passwords/edit.php");