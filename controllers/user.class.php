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
    return $db->selectData("users" , "*" , "id ='$id' ");
     
  }

  public function getUserByServicerole($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "service_role ='$id' ");
     
  }

  public function InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status,$service_role,$code,$unique_id){
    global $db, $fun;
    $db->saveData(TBL_USER , "user_email = '$email',user_firstname = '$firstname', user_password = '$password', user_lastname = '$lastname', user_address = '$address', role = '$role', verified = '$verified', status = '$status', service_role ='$service_role', code = '$code', unique_id ='$unique_id' "); 
    
  }

  public function UpdateUser($id, $email,$firstname,$lastname,$password,$address,$role, $verified, $status){
    global $db, $fun;
    $db->updateData(TBL_USER,  "email = '$email',firstname = '$firstname', password = '$password', lastname = '$lastname', address = '$address', role = '$role', verified = '$verified', status = '$status'", "user_id = '$id'");
  }

  public function DeleteUser($id){
    global $db, $fun;
    $db->deleteData(TBL_USER, "user_id = '$id'");
  }

}

$user = new User;

