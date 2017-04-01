<?php
namespace LaraBook\Registration;
class RegisterUserCommand {

    public $username,$email,$password;

    function __construct($username,$email,$password){

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

} 