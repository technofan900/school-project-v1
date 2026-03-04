<?php

namespace Http\Forms;
use Core\Validator;

class LoginForms {

    protected $errors = [];

    public function validate($login, $password) {
        // login can be either a username or an email address
        if (! Validator::string($login)) {
            $this->errors['login'] = "Ievadiet derīgu lietotājvārdu vai e‑pastu";
        }

        if (! Validator::string($password, 4, 255)) {
            $this->errors['password'] = "Ievadiet derīgu paroli!";
        }

        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }

    public function setError($field, $message) {
        $this->errors[$field] = $message;
    }
 
}