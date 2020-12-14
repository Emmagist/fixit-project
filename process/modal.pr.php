<?php
    if (isset($_POST['about_modal'])) {
        $error = '';
        $error = Validation::ValidateAboutModal($error);
        $about = $db->escape_string($_POST['description']);
        $token = $_POST['user_token'];

        if(empty($error)){
            User::upDateAboutModal($about,$token);
            $_SESSION['message-success'] = "Updated Successfully...";
        }
    }

    if (isset($_POST['profile_button'])) {
        $error = "";
        $token = $_POST['user_token'];
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $fileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $destination = "scr/work-registration-pictures/".$file_name;

        if ($file_size >  500000000){
            $error = 'Sorry, your file must be less than 3mb';
        }elseif ($fileType !== 'jpg' && $fileType !== 'jpeg' && $fileType !== 'png' ){
            $error = 'Sorry, only jpg, png and jpeg format are allowed.';
        }elseif ($file_size === 0){
            $error = 'File can not be empty';
        }elseif (empty($error)) {
            if (move_uploaded_file($file_tmp,$destination)){
                User::upDateProfileModal($destination,$token);
                $_SESSION['message-success'] = "Uploaded Successfully...";
            }
        }
    }

    if (isset($_POST['address_modal'])) {
        $error = '';
        $error = Validation::ValidateAddressModal($error);
        $token = $_POST['user_token'];
        $address = $db->escape_string($_POST['address']);

        if(empty($error)){
            User::upDateAddressModal($address,$token);
            $_SESSION['message-success'] = "Updated Successfully...";
        }
    }

    

?>