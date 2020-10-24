<?php
include "init.php";
class Validation {

        public static function ValidateUserRegistration($error){
            if(empty($_POST['firstname'])){
                $error = 'Provide First name';
            }elseif (empty($_POST['email'])){
                $error = 'Provide an Email';
            }elseif (empty($_POST['lastname'])){
                $error = 'Provide Last name';
            }elseif (empty($_POST['reg_token'])){
                $error = 'Missing  token';
            }elseif (empty($_POST['password'])){
                $error = 'Provide a password';
            }elseif ($_POST['confirmpassword'] !== $_POST['password']){
                $error = 'Password mismatch';
            }elseif (empty($_POST['phone_number']) || ! is_numeric($_POST['phone_number'])){
                $error = 'Invalid Phone number format';
            }elseif (empty($_POST['phone_number_two']) || ! is_numeric($_POST['phone_number_two'])){
                $error = 'Invalid Phone number two format';
            }elseif (strlen($_POST['phone_number_two']) < 10 || strlen($_POST['phone_number']) < 10){
                $error = 'Phone number length should be 10 character and above';
            } elseif (empty($_POST['description'])){
                $error = 'Fill field description';
            }elseif (empty($_POST['lga'])){
                $error = 'Provide a Local government area';
            }elseif (empty($_POST['stateR'])){
                $error = 'Provide a State or origin';
            }elseif (empty($_POST['address'])){
                $error = 'address can not be empty';
            }
            return $error;
        }

        public static function ValidationForLogin($error){
            if (empty($_POST['email'])) { //check for empty email
                $error = "The email field can not be empty";
            }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                $error = 'Provide a valid email format';
            }elseif (empty($_POST['password'])){ //check for empty password
                $error = 'The password field can not be empty';
            }

            return $error;
        }

    public static function ValidationForAdminRegistration($error){
        if (empty($_POST['firstname'])) {
            $error = "The firstname field can not be empty";
        }elseif (empty($_POST['lastname'])) {
            $error = "The lastname field can not be empty";
        }elseif (empty($_POST['email'])) {
            $error = "The email field can not be empty";
        }elseif(empty($_POST['address'])){
            $error ="The address field can not be empty";
        }elseif (empty($_POST['password'])) {
            $error = "The password field can not be empty";
        }elseif (User::findUserByEmail($_POST['email'])){
            $error = 'Email Already Exist ';
        }

        return $error;
    }
    public static function ValidationForAddAdminRegistration($error){
        if (empty($_POST['firstname'])) {
            $error = "The firstname field can not be empty";
        }elseif (empty($_POST['lastname'])) {
            $error = "The lastname field can not be empty";
        }elseif (empty($_POST['email'])) {
            $error = "The email field can not be empty";
        }elseif (empty($_POST['password'])) {
            $error = "The password field can not be empty";
        }elseif (User::findUserByEmail($_POST['email'])){
            $error = 'Email Already Exist ';
        }

        return $error;
    }


    public function ValidateCatRegistration($error){
        if (empty($_POST['name'])){
            $error = "Name can not be empty";
        }
        return $error;
    }

    public static function ValidateHelp($error){
        if (empty($_POST['name'])){
            $error = "Name can not be empty";
        }elseif (empty($_POST['email'])) {
            $error = "Email can not be empty";
        }
        return $error;
    }

    public static function ValidateForPartnership($error){
        if (empty($_POST['name'])) {
            $error = "Name can not be empty";
        }elseif (empty($_POST['phone_num'])) {
            $error = "Phone Number can not be empty";
        }elseif (empty($_POST['email'])) {
            $error = "Name can not be empty";
        }
        return $error;
    }

    public static function ValidationForChatBox($error){
        if (empty($_POST['message'])) {
            $error = "Can't send empty message..";
        }
        return $error;
    }

}

$val = new Validation();