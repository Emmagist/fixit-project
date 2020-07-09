<?php
include "init.php";
class Validation {

        public static function ValidateUserRegistration($errors){
            if(empty($_POST['firstname'])){
                $errors = 'Provide First name';
            }elseif (empty($_POST['email'])){
                $errors = 'Provide an Email';
            }elseif (empty($_POST['lastname'])){
                $errors = 'Provide Last name';
            }elseif (empty($_POST['reg_token'])){
                $errors = 'Missing  token';
            }elseif (empty($_POST['password'])){
                $errors = 'Provide a password';
            }elseif ($_POST['cpassword'] !== $_POST['password']){
                $errors = 'Password mismatch';
            }elseif (empty($_POST['phone_number'] || !is_numeric($_POST['phone_number']))){
                $errors = 'Invalid Phone number format';
            }elseif (empty($_POST['description'])){
                $errors = 'Fill field description';
            }elseif (empty($_POST['lga'])){
                $errors = 'Provide a Local government area';
            }elseif (empty($_POST['state'])){
                $errors = 'Provide a State or origin';
            }elseif (empty($_POST['field_of_profession'])){
                $errors = 'Field of profession can not be empty';
            }elseif (empty($_POST['address'])){
                $errors = 'address can not be empty';
            }
            return $errors;
        }


}

$val = new Validation();