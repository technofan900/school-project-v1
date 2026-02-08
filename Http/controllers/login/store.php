<?php
use Core\Authenticator;
use Http\Forms\LoginForms;
use Core\Session;

$username = $_POST['username'];
$password = $_POST['password'];

$form = new LoginForms();

if ($form->validate($username, $password)) {

    $auth = new Authenticator();
    if($auth->attempt($email, $password)) {
        redirect('/');
    }

    $form->setError('email', 'Email or password incorrect!');

}
Session::flash('errors', $form->errors());
redirect('/login');

