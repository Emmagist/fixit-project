<?php require_once "controllers/functions.class.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scr/css/bootstrap.min.css">
    <link rel="stylesheet" href="scr/css/style_sub_cat.css">
    <link rel="stylesheet" href="scr/css/footer.css">
  </head>
  <body>
  <div class="signup-header">
    
    <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 header-signup">
        <img src="scr/img/Fixitlogo transparent.png" class="logo-transparent" alt="Fixit logo">
        <input type="text" placeholder="Find Services" class="find-services form-control">
      </div>
    
      <div class="col-md-3"></div>
      <div class="col-md-3 log-sign">
        <button class="btn-sign-login">
        <?php
        if ($fun->ifLoggedIn()){ ?>
          <a href="logout.php" class="dash-nav-item text-danger" style="font-size: 18px; font-weight: 600;">Logout</a>
        <?php }else{ ?> 
          <a href="login.php" class="login">Login</a>|<a href="signup.php" class="sign-up">Signup</a>
          <?php }; ?>
        </button>
      </div>
    </div> 
    </div>
  </div>
  <div class="nav">
    <div class="container">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="sub_cat.php">Graphics & Designs</a></li>
        <li><a href="#">Programming & Tech</a></li>
        <li><a href="#">Music & Video</a></li>
        <li><a href="#">Handywork</a></li>
        <li><a href="#">Beauty & Fashion</a></li>
        <li><a href="#">Writing & Translation</a></li>
      </ul>
    </div>      
  </div>