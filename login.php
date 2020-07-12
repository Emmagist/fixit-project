<?php include "process/user.pr.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fixit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="scr/css/bootstrap.min.css">
  <link rel="stylesheet" href="scr/css/style_sub_cat.css">
</head>
<body>
  <section class="container mt-3">
    <form action="" class="form-group" id="main-signup-form" method="POST">
      <h4 class="form-h4 text-center mt-5 mb-4 mr-5">Join <span><img src="scr/img/fixitwhite.png" alt=""></span></h4>
      <div class="" id="form-two">
        <?php require_once "scr/inc/session-mgs.php";?>
        <?php require_once "scr/inc/messages.php";?>
        <input type="text" class="form-control mb-4" placeholder="Example@gmail.com" name="email">
        <input type="text" class="form-control mb-4 mt-3" placeholder="Password" name="password">
        <button class="btn btn-primary form-control" id="main-signup" name="login">SignIn</button>
      </div>
      <div class="login-footer text-center mt-5" >
        <p id="form-p">Welcome back login into your account here <span><img src="scr/img/fixitwhite.png" alt=""></span></p><hr class="login-hr">
        <p class="new-member text">New member? <a href="signup.php" class="text-primary">SignUp</a></p>
      </div>
    </form>
  </section>
</body>
</html>