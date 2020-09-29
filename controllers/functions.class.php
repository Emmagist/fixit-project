<?php
include "init.php";
class Functions {

  
  public static function arrayPrinter($array) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";exit;
  }

    public static function  uploadFile($error, $file_name, $file_size, $file_tmp,$file_type){
        $fileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
       if ($file_size > 500000000){
            $error = 'Sorry, your file is too large';
        }elseif ($fileType !== 'jpg' && $fileType !== 'jpeg' && $fileType !== 'png' ){
            $error = 'Sorry, only jpg and jpeg format are allowed.';
        }elseif ($file_size == 0){
            $error = 'File can not be empty';
        }
        return $error;
    }

	public function ifLoggedIn(){
      if(isset($_SESSION['user_token'])){return  true;}return  false;
    }

    public function  checkIfAdminLogin(){
        if (!isset($_SESSION['user_email'],$_SESSION['user_token']) && $_SESSION['role_id'] != 1) {
            header('location: ../index.php');
        }
    }

    public function  IsAdmin(){
      if ($_SESSION['role_id'] == 1){return true;}return false;

    }
  
}

$fun = new Functions;