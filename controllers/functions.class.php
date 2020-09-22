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
        }elseif ($fileType !== 'jpg' && $fileType && 'jpeg' ){
            $error = 'Sorry, only jpg and jpeg format are allowed.';
        }elseif ($file_size == 0){
            $error = 'File can not be empty';
        }
        return $error;
    }

	
  
}

$fun = new Functions;