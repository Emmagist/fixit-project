  <?php

    include "process/user.pr.php";
  //session_start();
    include "scr/inc/header2.php";
   if (!isset($_SESSION['email'], $_SESSION['service_role']) && !isset($_SESSION['reg_token'])) {
      header('location: signup.php');
    }else {
      $reg_token = $_SESSION['reg_token'];
      $email =$_SESSION['email'];
      $service_role = $_SESSION['service_role'];
    }
   ?>
  
  <main class="main">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
        
          <div class="title">
            Welcome To <img src="scr/img/fixitwhite.png" alt="Fixit logo" class="logo-white">
          </div>
          
        </div>
      </div>

      <div class="row">
        <div class="intro col-lg-12">
          We want to get to know you more, please the following informations
        </div>
      </div>
    <form action="" method="post" enctype="multipart/form-data">
      <input type='hidden' name='reg_token' value='<?=$reg_token?>'>
      <input type='hidden' name='email' value='<?=$email?>'>
      <input type='hidden' name='service_role' value='<?=$service_role?>'>
      <div class="row">
        <div class="col-md-12">
        <?php require_once "scr/inc/session-mgs.php";?>
        <?php require_once "scr/inc/messages.php";?>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lastname" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Comfirm Password</label>
            <input type="password" class="form-control" name="confirmpassword" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">State of Residence</label>
            <input type="text" class="form-control" name="stateR" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">LGA</label>
            <input type="text" class="form-control" name="lga" required>
          </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="">Residential Address</label>
            <input type="text" class="form-control" name="address" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">Phone  Number</label>
            <input type="text" class="form-control" name="phone_number" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">Phone Number 2</label>
            <input type="text" class="form-control" name="phone_number_two" required>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Field of Profession</label>
            <input type="text" name="field_of_profession" placeholder="You can choose more than word" class="form-control" required>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="5" class="textarea form-control" required></textarea>
          </div>
        </div>
        <div class="col-md-3">
          <button class="btn btn-upload">Upload A Picture</button>
        </div>
        <div class="col-md-3">
          <label for="file" id="file-label">Choose a file</label>
          <input type="file" id="file" class="file" name="image">
        </div>
      </div>
      <div class="row">
        <div class="col-md-9 picture-guide">
          A picture with a clear face, holding a national I.D card or a valid I.D card of respective profession.
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-upload" name="registration">Submit</button>
        </div>
      </div>
    </form>  
  </div>
</main>

<?php require_once "scr/inc/footer.php";?>