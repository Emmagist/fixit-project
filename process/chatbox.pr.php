<?php

    require_once "controllers/init.php";

    if (isset($_POST['chatbox_button'])) {
        $error = '';
        Validation::ValidationForChatBox($error);
        $receiver_id = $_POST['receiver_id'];
        $provider_token = $_POST['receiver_token'];
        $employer_token = $_POST['sender_token'];
        // $name = $_POST['sender_name'];
        $name = '';
        $message = $db->escape_string($_POST['message']);
        $date = date("yy/m/d");
        $status = 0;

        if (empty($error)) {
            User::insertForChatBox($receiver_id,$provider_token,$employer_token,$name,$message,$date,$status);
        }
    }

    if (isset($_POST['reply_button'])) {
        $error = '';
        Validation::ValidationForChatBox($error);
        $receiver_id = $_POST['receiver_id'];
        $provider_token = $_POST['receiver_token'];
        $employer_token = $_POST['sender_token'];
        // $name = $_POST['sender_name'];
       
        $name = '';
        $message = $db->escape_string($_POST['message']);
        $date = date("yy/m/d");
        $status = 0;

        if (empty($error)) {
            User::insertForChatBox($receiver_id,$provider_token,$employer_token,$name,$message,$date,$status);
        }
    }

?>