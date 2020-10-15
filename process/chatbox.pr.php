<?php

    require_once "controllers/init.php";

    if (isset($_POST['chatbox_button'])) {
        Validation::ValidationForChatBox($error);
    }

?>