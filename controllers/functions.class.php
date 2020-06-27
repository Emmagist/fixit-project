<?php
include "init.php";
class Functions {

  
  public static function arrayPrinter($array) {
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
	}

	
  
}

$fun = new Functions;