<?php
include  "../controllers/init.php";
unset($_SESSION["user_token"], $_SESSION["email"], $_SESSION['role_id']);
session_destroy();
header("Location: ../index.php");