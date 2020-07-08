<?php
include "init.php";
class User {

  public static  function  InsertToken($token){
      global $db;
      return $db->saveData(TBL_USER ,"unique_id ='$token'");
  }

  public function getAllUser(){
    global $db, $fun;
    return $db->selectData("users" , "*");
     
  }
  public function getSingleUser($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "id ='$id' ");
     
  }

public static function  findUserByEmail($email){
    global $db, $fun;
    return $db->selectData("users" , "*" , "user_email ='$email' ");

}

    public static function  findUserByUniqueId($column){
        global $db, $fun;
        return $db->selectData("users" , "*" , "unique_id ='$column' ");

    }

  public function getUserByServicerole($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "service_role ='$id' ");
     
  }

  public function InsertUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession){
    global $db, $fun;
    $db->saveData(TBL_USER , "user_email = '$email',user_firstname = '$firstname', user_password = '$password', user_lastname = '$lastname', user_address = '$address', role = '$role', verified = '$verified', status = '$status', service_role ='$service_role', code = '$code', unique_id ='$unique_id',phone_number ='$phone_number',phone_number_two ='$phone_number_two',state_of_residence='$stateR',lga='$lga',description='$description',field_of_profession='$fieldOfProfession' "); 
    
  }

  public function UpdateUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession){
    global $db, $fun;
    $db->updateData(TBL_USER,  "user_email = '$email',user_firstname = '$firstname', user_password = '$password', user_lastname = '$lastname', user_address = '$address', role = '$role', verified = '$verified', status = '$status', service_role ='$service_role', code = '$code', unique_id ='$unique_id',phone_number ='$phone_number',phone_number_two ='$phone_number_two',state_of_residence='$stateR',lga='$lga',description='$description',field_of_profession='$fieldOfProfession' ", "unique_id = '$unique_id'");
  }

  public function DeleteUser($id){
    global $db, $fun;
    $db->deleteData(TBL_USER, "user_id = '$id'");
  }

}

    $user = new User;

