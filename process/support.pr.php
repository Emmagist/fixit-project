<?php
  require_once "controllers/init.php";

  if (isset($_POST['support_button'])) {
    $error = '';
    $error = Validation::ValidateHelp($error);
    $name =  $db->escape_string($_POST['name']);
    // echo $name;exit;
    $email =  $db->escape_string($_POST['email']);
    // echo $email;exit;
    $phone_num = '';
    $status = 0;

    if (empty($error)) {
      
      $sp = User::insertHelp($name,$phone_num,$email,$status);

      $_SESSION['message-success'] = "Thanks For Supporting Us";
    }
  }

  if (isset($_POST['partner_button'])) {
    $error = '';
    $error = Validation::ValidateForPartnership($error);
    $name =  $db->escape_string($_POST['name']);
    // echo $name;exit;
    $phone_num =  $db->escape_string($_POST['phone_num']);
    // echo $phone_num;exit;
    $email =  $db->escape_string($_POST['email']);
    // echo $email;exit;
    $status = 1;

    if (empty($error)) {
      User::insertHelp($name,$phone_num,$email,$status);
      // Functions::getQuery($use);
      $_SESSION['message-success'] = "Thanks For Partnering With Us... Cheers!";
    }
  }

  if (isset($_POST['add_about'])) {
    $error = '';
    $title = $db->escape_string($_POST['title']);
    $text = $db->escape_string($_POST['text']);
    $date = date("yy/m/d");
    $status = 0;

    if ($title == '') {
      $error = 'Title can not be empty';
    }elseif ($text = '') {
      $error = 'Content can not be empty';
    }else {
      User::insertAbout($title,$text,$date);
      $_SESSION['message-success'] = "Content added successfully...";
    }
  }
?>