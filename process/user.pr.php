<?php
require_once "controllers/init.php";

// session_start();

/***
 * Post registration for users
 */
if (isset($_POST['service_employer']) || isset($_POST['service_provider'])){

      $data = array_keys($_POST);
      $service_role =$db->escape_string($role = ($data[1] === 'service_employer') ? 'service_employer' : 'service_provider');
      $email = $db->escape_string($_POST['email']);
      if(empty($email)){
          $error = 'Provide Your Email ';
      }else if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
          $error = 'Invalid Email Address';
      }elseif (User::findUserByEmail($email)){
          $error = 'Email Already Exist ';
      } else {
          if( $UserTokenchecks = User::ifRegistrationTokenAlreadyExist($email)){
              foreach($UserTokenchecks as $UserTokencheck){
                  $UserTokenRegTokenCheck = $UserTokencheck['reg_token'];
                  $_SESSION['reg_token'] = $UserTokenRegTokenCheck;
                  $session = $_SESSION['reg_token'] . $_SESSION['email'] . $_SESSION['service_role'];
                  $sessionFromDb =  "<a href='signup2.php?token=$session' style='text-decoration: none' class='text-dark'> Welcome back please follow this link to continue and complete your registration.</a>";
              }

          }else{
              $reg_token=  md5(mt_rand('1','6'));
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
if (isset($_POST['registration'], $_FILES['file'])){
 $error = "";
 //Functions::arrayPrinter( $_FILES);
  $error = Validation::ValidateUserRegistration($error);
  $firstname =  $db->escape_string($_POST['firstname']);
  $lastname = $db->escape_string($_POST['lastname']);
  $password =  $db->escape_string($_POST['password']);
  $email =  $db->escape_string($_POST['email']);
  $reg_token =  $db->escape_string($_POST['reg_token']);
  $service_role =  $db->escape_string($_POST['service_role']);
  $cpassword =  $db->escape_string($_POST['confirmpassword']);
  $status = 0;
  $role_id = 2;
  $verified = 'unverified';
  $phone_number = $db->escape_string($_POST['phone_number']);
  $phone_number_two=  $db->escape_string($_POST['phone_number_two']);
  $description = $db->escape_string($_POST['description']);
  $lga = $db->escape_string($_POST['lga']);
  $stateR =  $db->escape_string($_POST['stateR']);
  $address =  $db->escape_string($_POST['address']);
  $password = password_hash($password, PASSWORD_DEFAULT);
  $code = md5(rand('12345','12345'));
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    $destination = "scr/profile-uploads/".$file_name;
    $error = Functions::uploadFile($error, $file_name, $file_size, $file_tmp,$file_type);
  if (empty($error)){
      if (User::VerifyUserByTokenOnRegistration($reg_token , $email, $service_role)){
          if (!User::findUserByEmail($email)){
              if (move_uploaded_file($file_tmp,$destination)){
                  $user->InsertUser($email,$firstname,$lastname,$password,$address,$role_id, $verified, $status,$reg_token,$service_role, $code,$phone_number,$phone_number_two,$stateR,$lga,$description,$destination);
                  User::DeleteUserOnTepRegTable($reg_token);
                  $_SESSION['message-success'] = "Registration successful and a verification link has been sent to your email , Thanks you.";
                  header('location: index.php');
              }

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

    if (isset($_POST['login'])) {
        $error='';
        $email = $db->escape($_POST['email']);
        $password = $db->escape($_POST['password']);
        $error = Validation::ValidationForLogin($error);
       // var_dump(User::findUserByEmail($email));exit();
        if (empty($error)){
            foreach(User::findUserByEmail($email) as $userInfo){
                if($userInfo && password_verify($password, $userInfo['user_password'])){
                    $_SESSION['email'] = $userInfo['user_email'];
                    $_SESSION['user_token'] = $userInfo['user_token'];
                    $_SESSION['user_image'] = $userInfo['profile_image'];
                    $_SESSION['role_id']    = $userInfo['role_id'];
                    $_SESSION['success'] = 'You have successfully logged in';
                    $verifiedRow = $userInfo['verified'] === 'verified';
                    $_SESSION['verified'] = $verifiedRow;
                    $_SESSION['role_id'] = $userInfo['role_id'];
                    if ($userInfo['role_id'] == 2){
                        header('Location: index.php');
                    } else{
                        header('Location: admin/index.php');
                    }

                }else{
                    $error = 'These credentials do not match our records';
                }
            }

        }

    }




 

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


if (isset($_POST['work_registration'])){
    $error = '';
    $user_token = $db->escape_string($_POST['user_token']);
    $category_slug = $db->escape_string($_POST['category_slug']);
    $price = $db->escape_string($_POST['price']);
    if (empty($_POST['category_slug'])){
        $error = 'Please select a category';
    }elseif (empty($_POST['price'])){
        $error = 'Price field can\'t be empty';
    }elseif (!is_numeric($_POST['price']) ){
        $error = 'Price field must of type numeric';
    }
    else{
        if (empty($user->checkTableworkcategory($user_token,$category_slug))){
            $user->work_register($user_token,$category_slug,$price);
            $_SESSION['message-info'] = "Work Category registration submitted successfully";
        }else{
            $error = 'You can not register for same work category twice';
        }
    }


    //header('Location: work_registration.php');
}

if (isset($_GET['cat'])){

    Functions::arrayPrinter($_GET['cat']);
}

if (isset($_POST['post_craft'], $_FILES['file'])) {
    $error = "";
    $nav_category = $_POST['nav_category'];
}




