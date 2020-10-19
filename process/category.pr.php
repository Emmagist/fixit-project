<?php
require_once "../../controllers/init.php";
    $error = '';
    $number ='';
 if(isset($_POST['add_cat'])){
        $error = Validation::ValidateCatRegistration($error);
        $name = $db->escape_string($_POST['name']);
        $user_id = $db->escape_string($_POST['user_id']);
        $slug = $fun->makeSlug(strtolower($name));
        if (empty($error)){
            Categories::insertCategory($name,$user_id,$slug);
            header('Location: index.php');
        }
    }

?>