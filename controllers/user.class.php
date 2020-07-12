<?php
include "init.php";
class User {

  public static  function  InsertToken($reg_token){
      global $db;
      return $db->saveData(TBL_POST_REG_FOR_USER ,"reg_token ='$reg_token'");
  }

  public function getAllUser(){
    global $db, $fun;
    return $db->selectData(TBL_USER, "*");
     
  }

  public function getEmailPassword($email,$password){
    global $db, $fun;
    return $db->selectData(TBL_USER, "*", "user_email = '$email' AND user_password = '$password'");
  }

  public function getSingleUser($id){
    global $db, $fun;
    return $db->selectData(TBL_USER , "*" , "id ='$id' ");
     
  }

public static function  findUserByEmail($email){
    global $db, $fun;
    return $db->selectData(TBL_USER , "*" , "user_email ='$email' ");

}

    public static function  VerifyUserByTokenOnRegistration($column){
        global $db, $fun;
        return $db->selectData(TBL_POST_REG_FOR_USER  , "*" , "reg_token ='$column' ");

    }

  public function getUserByServicerole($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "service_role ='$id' ");
     
  }

  public function InsertUser($email,$firstname,$lastname,$password,$address,$reg_token,$role, $verified, $status, $service_role, $code,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession){
    global $db, $fun;
    $db->saveData(TBL_USER , "user_email = '$email',user_firstname = '$firstname', user_password = '$password', user_lastname = '$lastname', user_address = '$address',unique_id = '$reg_token', role = '$role', verified = '$verified', status = '$status', service_role ='$service_role', code = '$code',phone_number ='$phone_number',phone_number_two ='$phone_number_two',state_of_residence='$stateR',lga='$lga',description='$description',field_of_profession='$fieldOfProfession' ");
    
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

