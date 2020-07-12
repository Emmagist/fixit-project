<?php
include "init.php";
class Functions {

  
  public static function arrayPrinter($array) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";exit;
  }

    public static function  uploadFile($errors, $target_file,$file){
      $fileSize = $file['size'];
      $fileTemp = $file['tmp_name'];
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (file_exists($target_file)){
            $errors = 'File already exist';
        }elseif ($fileSize > 500000000){
            $errors = 'Sorry, your file is too large';
        }elseif ($fileType !== 'jpg' && $fileType && 'jpeg' ){
            $errors = 'Sorry, only jpg and jpeg format are allowed.';
        }elseif (empty($target_file)){
            $errors = 'File can not be empty';
        }
        return $errors;
    }

	
  
}

$fun = new Functions;