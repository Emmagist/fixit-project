<?php

require "../../controllers/init.php";

if (isset($_POST['add_admin_button'])) {
    $error = '';
    $error = Validation::ValidationForAddAdminRegistration($error);
    $firstname = $_POST['firstname'];
    // echo $firstname;exit;
    $lastname =$_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // echo $email;exit;
    $address = $_POST['address'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code = md5(rand('12345','12345'));
    $reg_token= md5(mt_rand('1','6'));
    $role_id = 1;
    $verified = 'unverified';
    $status = 0;
    $phone_number = '';
    $phone_number_two = '';
    $destination = $_POST['profile'];
    // $file_name = $_FILES['file']['name'];
    // $file_size =$_FILES['file']['size'];
    // $file_tmp =$_FILES['file']['tmp_name'];
    // $file_type=$_FILES['file']['type'];
    // $destination = "../scr/profile-uploads/".$file_name;
    // $error = Functions::uploadFile($error, $file_name, $file_size, $file_tmp,$file_type);
    if (empty($error)){
        $use = $user->InsertUser($email,$firstname,$lastname,$password,$address,$role_id, $reg_token, $verified, $status,$reg_token,$service_role ='', $code,$phone_number,$phone_number_two,$stateR='',$lga='',$description='',$fieldOfProfession='',$destination);
        // var_dump($use);exit;
        $_SESSION['message-success'] = "Admin Registration Successful...";
        header('location: signup.php');
    }
}

?>