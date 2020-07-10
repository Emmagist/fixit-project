<?php
require_once "controllers/init.php";


/***
 * Delete all user information(data) automatically where reg_token == $reg_token on table TBL_POST_REG_FOR_USER in db when it reach day five
 */
User::DeleteRecordsOlderThanThreeDays();


/***
 * Post registration for users
 */
if (isset($_POST['service_employer']) || isset($_POST['service_provider'])){
      $data = array_keys($_POST);
      $service_role = ($data[1] === 'service_employer') ? 'service_employer' : 'service_provider';
      $email = $_POST['email'];
      if(empty($email)){
          $error = 'Provide Your Email ';
      }else if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
          $error = 'Invalid Email Address';
      }elseif (User::findUserByEmail($email)){
          $error = 'Email Already Exist ';
      } else {
          if( $userTokenchecks = User::ifRegistrationTokenAlreadyExist($email)){
              foreach($userTokenchecks as $userTokencheck){
                  $userTokenRegTokenCheck = $userTokencheck['reg_token'];
                  $_SESSION['reg_token'] = $userTokenRegTokenCheck;
                  $session = $_SESSION['reg_token'] . $_SESSION['email'] . $_SESSION['service_role'];
                  $sessionFromDb =  "<a href='signup2.php?token=$session' style='text-decoration: none'> Welcome back please follow this link to continue and complete your registration.</a>";
              }

          }else{
              $reg_token= 'USER' . '-' . md5(mt_rand('1','6'));
              $_SESSION['reg_token'] =  $reg_token;
              $reg_token = $_SESSION['reg_token'] ;
              $_SESSION['email'] = $email;
              $_SESSION['service_role'] = $service_role;
              $date = date("m-d-Y");
              $data = User::InsertToken($reg_token, $email, $service_role, $date);
              $_SESSION['message-info'] = "Please continue your registration here";
              header('location: signup2.php');
          }

      }
}

/***
 * Registration for users
 */
if (isset($_POST['registration'])){
  //$fun->arrayPrinter($_POST);exit;
 $errors = "";
  $error = Validation::ValidateUserRegistration($errors);
  $firstname = $_POST['firstname'];
  $lastname =$_POST['lastname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $reg_token = $_POST['reg_token'];
  $email = $_POST['email'];
  $service_role = $_POST['service_role'];
  $cpassword = $_POST['confirmpassword'];
  $status = 0;
  $role = 'user';
  $verified = 'unverified';
  $phone_number =$_POST['phone_number'];
  $phone_number_two=$_POST['phone_number_two'];
  $description = $_POST['description'];
  $lga =$_POST['lga'];
  $stateR = $_POST['stateR'];
  $fieldOfProfession = $_POST['field_of_profession'];
  $address = $_POST['address'];
  $password = password_hash($password, PASSWORD_DEFAULT);
  $code = md5(rand('12345','12345'));
  if (empty($error)){
      if (User::VerifyUserByTokenOnRegistration($reg_token , $email, $service_role)){
          if (!User::findUserByEmail($email)){
              $user->InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status,$reg_token,$service_role, $code,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession);
              User::DeleteUserOnTepRegTable($reg_token);
              $mailer->verificationMail($firstname,$lastname,$email,$code);
              $_SESSION['message-success'] = "Registration successful and a verification link has been sent to your email , Thanks you.";
              header('location: index.php');
          }else{
              $error = 'There is already a user associated with this Email in our database.';
          }

      }else {
          $error = 'Registration Error try Again';
      }
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







