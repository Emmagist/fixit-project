<?php
include "init.php";
class Categories {
    public static function getAllCategories(){
        global $db, $fun;
        return $db->selectData(TBL_CATEGORIES, "*");

    }

    public function getSingleCategory($id){
        global $db, $fun;
        return $db->selectData(TBL_CATEGORIES , "*" , "id ='$id' ");

    }

    public static function insertCategory($name,$user_id,$slug){
        global $db, $fun;
        return  $db->saveData(TBL_CATEGORIES, "name ='$name',slug = '$slug', user_id = '$user_id'");
    }
}

$cat = new Categories();