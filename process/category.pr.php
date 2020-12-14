<?php
require_once "../../controllers/init.php";
    $error = '';
    $number ='';
 if(isset($_POST['add_cat'])){
        $error = Validation::ValidateCatRegistration($error);
        $name = $db->escape_string($_POST['name']);
        $user_id = $db->escape_string($_POST['user_id']);
        $slug = $fun->makeSlug(strtolower($name));
        $description = $db->escape_string($_POST['description']);
        if (empty($error)){
            Categories::insertCategory($name,$user_id,$slug,$description);
            header('Location: index.php');
        }
    }

 if(isset($_POST['add_sub_cat'])){
    $error = '';
    $error = Validation::ValidateSubCatRegistration($error);
    $subcat = $db->escape_string($_POST['sub_cat']);
    $select = $db->escape_string($_POST['select_id']);
    $user_id = $db->escape_string($_POST['user_id']);
    if (empty($error)){
        Categories::insertSubCategory($subcat,$user_id,$select);
        // header('Location: index.php');
    }
}

