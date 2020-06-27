<?php include "path.php";?>
<?php include ROOT_PATH . "/process/user.pr.php";?>
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
    <form action="" class="form-group" id="main-signup-form">
      <h4 class="form-h4 text-center mt-5 mb-4 mr-5">Join <span><img src="scr/img/fixitwhite.png" alt=""></span></h4>
      <div class="" id="form-two">
        <input type="text" class="form-control mb-4" placeholder="Example@gmail.com">
        <input type="text" class="form-control mb-4 mt-3" placeholder="Password">
        <button class="btn btn-primary form-control" id="main-signup">SignIn</button>
      </div>
      <div class="login-footer text-center mt-5" >
        <p id="form-p">Welcome back login into your account here <span><img src="scr/img/fixitwhite.png" alt=""></span></p><hr class="login-hr">
        <p class="new-member text">New member? <a href="<?= BASE_URL . '/signup.php' ?>" class="text-primary">SignUp</a></p>
      </div>
    </form>
  </section>
</body>
</html>