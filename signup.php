 <?php require_once "scr/inc/header3.php";?>
<body id="main-signup-body">
  <section class="container mt-3">
    <form action="" class="form-group" id="main-signup-form" method="post">
      <h4 class="form-h4 text-center mt-5">Join <span><img src="scr/img/fixitwhite.png" alt=""></span></h4>
      <div class="" id="form-one">
        <input type="text" class="form-control" placeholder="Example@gmail.com" name="email" id="email">
      </div>

      <div class="form-two mt-5">
        <h4 class="form-two-h4">Continue As</h4>
        <button type="submit" class="form-control mb-3 btn btn-success text-white" name="service_employer">Service Employer</button>
        <!-- <span><hr> <p>OR</p> <hr></span> -->
        
      </div>
      <div class="container col-container">
      <div class="form-three row">
        <div class="col-md-3 form-col mb-4 mt-2" id="form-col"></div>
        <div class="col-md-1 col-form mb-3">or</div>
        <div class="col-md-3 form-col mb-4 mt-2"></div>
      </div>
      </div>
      <div class="form-two">
      <button type="submit" class="form-control mb-3 btn btn-primary text-white" name="service_provider">Service Provider</button>
      </div>
      <div class="login-footer text-center mt-5">
      <div class="footer text-center mt-5 pb-3">
        <p class="form-p">By joining I agree to receive mails from <span><img src="scr/img/fixitwhite.png" alt=""></span></p>
        <p>Already a member? <a href="<?= BASE_URL . '/login.php' ?>" class="text-primary">SignIn</a></p>

      </div>
    </form>
  </section>
</body>
</html>