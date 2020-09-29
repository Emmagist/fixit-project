<?php
include "init.php";

class User {

    public  function  __construct(){
        $this->DeleteRecordsOlderThanAWeek();
    }

  public static  function  InsertToken($reg_token, $email, $service_role, $date){
      global $db;
      return $db->saveData(TBL_POST_REG_FOR_USER ,"reg_token ='$reg_token', email ='$email', service_role='$service_role', delete_on = '$date' ");
  }

  public static function  ifRegistrationTokenAlreadyExist($email){
      global $db;
      return $db->selectData(TBL_POST_REG_FOR_USER , "*", "email = '$email' ");
  }

  public function getAllUser(){
    global $db, $fun;
    return $db->selectData(TBL_USER, "*");
     
  }

  public function getSingleUser($id){
    global $db, $fun;
    return $db->selectData(TBL_USER , "*" , "id ='$id' ");
     
  }

    public static function  findUserByEmail($email){
        global $db, $fun;
        return $db->selectData(TBL_USER , "*" , "user_email ='$email' ");

    }

    public static function  VerifyUserByTokenOnRegistration($reg_token , $email, $service_role){
        global $db, $fun;
        return $db->selectData(TBL_POST_REG_FOR_USER  , "*" , "reg_token ='$reg_token' AND email='$email' AND service_role='$service_role' ");

    }



  public function getUserByServicerole($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "service_role ='$id' ");
     
  }

  public function InsertUser($email,$firstname,$lastname,$password,$address,$role_id, $verified, $status,$reg_token,$service_role, $code,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession,$destination) {
    global $db, $fun;
    $last_login = '0000-00-00 00:00:00';
    $updated_at = '0000-00-00 00:00:00';
    $deleted_at = '0000-00-00 00:00:00';
    $db->saveData(TBL_USER ,
        "user_email = '$email',
        user_firstname = '$firstname', 
        user_password = '$password', 
        user_lastname = '$lastname', 
        user_address = '$address',
        user_token = '$reg_token', 
        role_id = '$role_id', 
        verified = '$verified', 
        status = '$status', 
        service_role ='$service_role', 
        code = '$code',
        phone_number ='$phone_number',
        phone_number_two ='$phone_number_two',
        state_of_residence='$stateR',
        lga='$lga',
        description='$description',
        field_of_profession='$fieldOfProfession',
        profile_image = '$destination',
        last_login = '$last_login',
        updated_at='$updated_at',
        deleted_at='$deleted_at'
         ");
    
  }

  public function UpdateUser($email,$firstname,$lastname,$password,$address,$role, $verified, $status, $service_role, $code,$unique_id,$phone_number,$phone_number_two,$stateR,$lga,$description,$fieldOfProfession){
    global $db, $fun;
    $db->updateData(TBL_USER,  "user_email = '$email',user_firstname = '$firstname', user_password = '$password', user_lastname = '$lastname', user_address = '$address', role = '$role', verified = '$verified', status = '$status', service_role ='$service_role', code = '$code', unique_id ='$unique_id',phone_number ='$phone_number',phone_number_two ='$phone_number_two',state_of_residence='$stateR',lga='$lga',description='$description',field_of_profession='$fieldOfProfession' ", "unique_id = '$unique_id'");
  }

  public function DeleteUser($id){
    global $db, $fun;
    $db->deleteData(TBL_USER, "user_id = '$id'");
  }

  public  static  function  DeleteUserOnTepRegTable($reg_token){
      global $db;
     return  $db->deleteData(TBL_POST_REG_FOR_USER, "reg_token = '$reg_token'");
  }

    public  function  DeleteRecordsOlderThanAWeek(){
        global $db;
        $date = date("m-d-Y", strtotime('-5 day'));
        return  $db->deleteData(TBL_POST_REG_FOR_USER, "delete_on < '$date'");
    }

}

    $user = new User;

