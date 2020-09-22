<?php
include  "controllers/init.php";

unset($_SESSION["user_token"], $_SESSION["email"]);
header("Location:login.php");