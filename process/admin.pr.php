<?php
require "../path.php";
require_once ROOT_PATH . "/controllers/init.php";

    if (isset($_POST['admin-reg'],  $_FILES['file'])) {
        $error = '';
        $error = Validation::ValidationForAdminRegistration($error);
        $firstname = $_POST['firstname'];
        $lastname =$_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $code = md5(rand('12345','12345'));
        $reg_token= md5(mt_rand('1','6'));
        $role_id = 1;
        $verified = 'unverified';
        $status = 0;
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $destination = "../scr/profile-uploads/".$file_name;
        $error = Functions::uploadFile($error, $file_name, $file_size, $file_tmp,$file_type);
        if (empty($error)){
            if (move_uploaded_file($file_tmp,$destination)){
                $user->InsertUser($email,$firstname,$lastname,$password,$address,$role_id, $verified, $status,$reg_token,$service_role ='', $code,$phone_number='',$phone_number_two='',$stateR='',$lga='',$description='',$fieldOfProfession='',$destination);
                User::DeleteUserOnTepRegTable($reg_token);
                $_SESSION['message-success'] = "Registration successful and a verification link has been sent to your email , Thanks you.";
                header('location: index.php');
            }
        }
    }

?>