<?php
include "init.php";
class User {
  public $firstname, $email;

  public function getAllUser(){
    global $db, $fun;
    return $db->selectData("users" , "*");
     
  }
  public function getSingleUser($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "user_id ='$id' ");
     
  }

  public function InsertUser($email,$firstname,$password){
    global $db, $fun;
    return $db->saveData(TBL_USER , "email = '$email',firstname = '$firstname', password = '$password' ");
     
  }

  public function UpdateUser($id, $email, $firstname){
    global $db, $fun;
    $db->updateData(TBL_USER, "email = '$email', firstname ='$firstname'", "user_id = '$id'");
  }

  public function DeleteUser($id){
    global $db, $fun;
    $db->deleteData(TBL_USER, "user_id = '$id'");
  }

}

$user = new User;

