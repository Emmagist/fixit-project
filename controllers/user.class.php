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

  public static function getAllUserByRole(){
    global $db, $fun;
    return $db->selectData(TBL_USER, "*", "role_id = '2'");
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

  public static function getSingleServiceProvider($id){
    global $db, $fun;
    return $db->selectData("users" , "*" , "user_token ='$id' ");
     
  }
  
  public function getAllServiceProvider(){
      global $db, $fun;
      return $db->selectData("users" , "*" , "service_role ='service_provider' ", "order by RAND()");
  }

  public function InsertUser($email,$firstname,$lastname,$password,$address,$role_id, $verified, $status,$reg_token,$service_role, $code,$phone_number,$phone_number_two,$stateR,$lga,$description,$destination) {
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
        profile_image = '$destination',
        last_login = '$last_login',
        updated_at='$updated_at',
        deleted_at='$deleted_at'
         ");
    
  }

  public static function insertHelp($name,$phone_num,$email,$status){
    global $db;
    $db->saveData(TBL_HELP, "name='$name', phone_num='$phone_num', email='$email', status='$status'");
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

  public static function getUserByToken($token){
    global $db;
    return $db->selectData(TBL_USER , "*", "user_token ='$token' ");
  }

  public static function getUserTestimony($email){
    global $db;
    return $db->selectData(TBL_TESTIMONY , "*" , "email_to = '$email'");
  }

  public static function getUserTestimonyPics($email){
    global $db;
    return $db->selectData(TBL_USER , "*" , "user_email = '$email'");
  }

  public static function getFaq(){
    global $db;
    return $db->selectData(TBL_FAQ , "*");
  }

    public function work_register($user_token,$category_slug,$price,$destination){
        global $db;
        return $db->saveData(TBL_WORK_CATEGORY ,
            "user_token ='$user_token',
            category_slug = '$category_slug',
             price = '$price',
              work_image = '$destination' ");
    }

    public function checkTableworkcategory($user_token,$category_slug){
        global $db;
        return $db->selectData(TBL_WORK_CATEGORY, "*", "user_token = '$user_token' AND category_slug ='$category_slug'");
    }

    public  function  multSelectQueryForServiceProvider(){
        global  $db;
        $rows = [];
        $result = $db->query("SELECT * FROM users 
                                INNER JOIN work_category 
                                ON users.user_token = work_category.user_token  
                                INNER JOIN category  
                                ON  work_category.category_slug = category.slug
                                WHERE service_role = 'service_provider'");
        $row_cnt = $result->num_rows;
        if (!empty($result)) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
          //           Functions::arrayPrinter($rows);
            return $rows;
        }


    }

    public  static function searchByCategory($cat){

        global  $db;
        $rows = [];
        $result = $db->query("SELECT * FROM users 
                                INNER JOIN work_category 
                                ON users.user_token = work_category.user_token  
                                INNER JOIN category  
                                ON  work_category.category_slug = category.slug
                                WHERE category_slug = '$cat' AND role_id = 2");
        $row_cnt = $result->num_rows;
        if (!empty($result)) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
          // Functions::arrayPrinter($rows);
        }
        return $rows;
    }

    public static function insertAbout($title,$text,$date){
      global $db;
      $db->saveData(TBL_ABOUT, "title='$title', content='$text', date='$date' status='$status'");
    }

    public static function about(){
      global $db;
      return $db->selectData(TBL_ABOUT, "*");
    }

    public  static function selectCategoryName($cat){
        global  $db;
       return $db->selectData(TBL_CATEGORIES, "DISTINCT name", "slug='$cat' ");
    }

    public  function  multSelectQueryForSingleServiceProvider($token){
      global  $db;
      // echo "<pre>";
      // var_dump($token);
      // echo "</pre>";exit;
      $rows = [];
      $result = $db->query("SELECT * FROM users 
                              INNER JOIN work_category 
                              ON users.user_token = work_category.user_token  
                              INNER JOIN category  
                              ON  work_category.category_slug = category.slug
                              WHERE  user_token = '$token'");
      $row_cnt = $result->num_rows;
      if (!empty($result)) {
          while ($row = $result->fetch_assoc()) {
              $rows[] = $row;
          }
        //           Functions::arrayPrinter($rows);
          return $rows;
      }
  }

  public static function insertForChatBox($receiver_id,$receiver_token,$sender_token,$name,$message,$date,$status){
    global $db;
    return $db->saveData(TBL_CHAT_BOX, "receiver_id='$receiver_id', receiver_token='$receiver_token', sender_token='$sender_token', sender_name='$name', message='$message', date='$date', status='$status'");
  }

  public function getSingleUserByToken($sender_token){
    global $db, $fun;
    return $db->selectData(TBL_USER , "*" , "user_token ='$sender_token'"); 
  }
}

$user = new User;

