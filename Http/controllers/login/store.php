<?php
use Core\Authenticator;
use Http\Forms\LoginForms;
use Core\Session;

$login = $_POST['login'];
$password = $_POST['password'];

$form = new LoginForms();

if ($form->validate($login, $password)) {

    $auth = new Authenticator();
    if ($auth->attempt($login, $password)) {
        redirect('/');
    }

    $form->setError('login', 'Email/username or password incorrect!');
}

Session::flash('errors', $form->errors());
redirect('/login');

