<?php
require_once "controllers/init.php";
session_start();
/***
 * Post registration for users
 */
if (isset($_POST['service_employer']) || isset($_POST['service_provider'])){
  $data = array_keys($_POST);
  $service_role = ($data[1] == 'service_employer') ? 'service_employer' : 'service_provider';
  $email = $_POST['email'];
  $firstname = '';
  $lastname = '';
  $password = '';
  $status = 0;
  $role = '';
  $verified = '';
  $address = '';
  $code = '';
  $data = $user->InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status,$service_role,$code,$unique_id);
  $_SESSION['message-info'] = "Please continue your registration here";
  $_SESSION['unique_id'] =  md5(rand('99999','99999'));
  header('location: signup2.php');
 
  
}

/***
 * Registration for users
 */
if (isset($_POST['submit_registration'])){
  $firstname = $_POST['firstname'];
  $lastname =$_POST['lastname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $unique_id = $_POST['unique_id'];
  $cpassword = $_POST['confirmpassword'];
  $status = 0;
  $role = 'user';
  $verified = '';
  $address = $_POST['address'];
  $password = password_hash($password, PASSWORD_DEFAULT);
  $code = md5(rand('12345','12345'));
  $user->InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id);
  $mailer->verificationMail($firstname,$lastname,$email,$code);
  $_SESSION['message-success'] = "Registration successfull and a verification link has been sent to your email , Thanks.";
  header('location: signup2.php');
}

/***
 * Login user in 
 * @param rquired email and password
 */

 

/***
 * Get signle user information(data) that are associated with role user in db
 */
  if (isset($_SESSION['id'])) {
    $id = ($_SESSION['id']);
    $user->getSingleUser($id);
  }

 /***
 * Get all user information(data) where service-role is equal to service_provider user in db
 */
  
  $service_provider = 'service_provider';
  $provider = $user->getUserByServicerole($service_provider);
  
 /***
 * Get all user information(data) where service-role is equal to service_employer user in db
 */
  $service_employer= 'service_employer';
  $employers = $user->getUserByServicerole($service_employer);
 





