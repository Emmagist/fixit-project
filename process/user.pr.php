<?php
require_once "controllers/init.php";
session_start();
/***
 * Post registration for users
 */
if (isset($_POST['service_employer']) || isset($_POST['service_provider'])){
  $data = array_keys($_POST);
  $service_role = ($data[1] === 'service_employer') ? 'service_employer' : 'service_provider';
  $email = $_POST['email'];
  $firstname = '';
  $lastname = '';
  $password = '';
  $status = 0;
  $role = '';
  $verified = '';
  $address = '';
  $phone_number ='';
  $phone_number_two='';
  $description = '';
  $lga ='';
  $stateR = '';
  $fieldOfProfession = '';
  $code = '';
  if (!User::findUserByEmail($email)){
      if(empty($email)){
          $error = 'Provide your email';
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error = 'Invalid Email Address';
      } else {
          $token = md5(mt_rand('99999','99999'));
          $_SESSION['unique_id'] =  $token;
          $unique_id = $_SESSION['unique_id'] ;
          $_SESSION['email'] = $email;
          $_SESSION['service_role'] =$service_role;
          $data = User::InsertToken($token);
          //$data =  $user->InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession);
          $_SESSION['message-info'] = "Please continue your registration here";
          header('location: signup2.php');
      }
  }else {
      $error = 'Email has already been taken';
  }



 
  
}

/***
 * Registration for users
 */
if (isset($_POST['registration'])){
  //$fun->arrayPrinter($_POST);exit;
  $firstname = $_POST['firstname'];
  $lastname =$_POST['lastname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $unique_id = $_POST['unique_id'];
  $email = $_POST['email'];
  $service_role = $_POST['service_role'];
  $cpassword = $_POST['confirmpassword'];
  $status = 0;
  $role = 'user';
  $verified = '';
  $phone_number =$_POST['phone_number'];
  $phone_number_two=$_POST['phone_number_two'];
  $description = $_POST['description'];
  $lga =$_POST['lga'];
  $stateR = $_POST['stateR'];
  $fieldOfProfession = $_POST['field_of_profession'];
  $address = $_POST['address'];
  $password = password_hash($password, PASSWORD_DEFAULT);
  $code = md5(rand('12345','12345'));
  if (User::findUserByUniqueId($unique_id)){
      $user->UpdateUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession);
      $mailer->verificationMail($firstname,$lastname,$email,$code);
      $_SESSION['message-success'] = "Registration successful and a verification link has been sent to your email , Thanks.";
      header('location: index.php');
  }else {
      $error = 'Error Registering';
  }

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
 





