<?php
include "init.php";
class Categories {
    public static function getAllCategories(){
        global $db, $fun;
        return $db->selectData(TBL_CATEGORIES, "*", "parent='0'");

    }

    public function getSingleCategory($id){
        global $db, $fun;
        return $db->selectData(TBL_CATEGORIES , "*" , "id ='$id' ");

    }

    public static function insertCategory($name,$user_id,$slug,$description){
        global $db, $fun;
        return  $db->saveData(TBL_CATEGORIES, "name ='$name',slug = '$slug', user_id = '$user_id', details = '$description'");
    }

    public static function insertSubCategory($subcat,$user_id,$select){
        global $db, $fun;
        return  $db->saveData(TBL_CATEGORIES, "sub_cat ='$subcat', parent = '$select', user_id = '$user_id'");
    }

    public static function getAllSubCategories(){
        global $db;
        return $db->selectData(TBL_CATEGORIES, "*", "parent !=0");
    }
}

$cat = new Categories();