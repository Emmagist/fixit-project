<html>
  <?php require_once "scr/inc/header2.php"; ?>
  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-lg-12">
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

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">State of Residence</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">LGA</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="">Residential Address</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">Phone  Number</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="">Phone Number 2</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Field of Profession</label>
            <input type="text" placeholder="You can choose more than word" class="form-control">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Description</label>
            <textarea name="" id="" cols="30" rows="5" class="textarea form-control"></textarea>
          </div>
        </div>
        <div class="col-md-3">
          <button class="btn btn-upload">Upload A Picture</button>
        </div>
        <div class="col-md-3">
          <label for="file" id="file-label">Choose a file</label>
          <input type="file" id="file" class="file">
        </div>
      </div>
      <div class="row">
        <div class="col-md-9 picture-guide">
          A picture with a clear face, holding a national I.D card or a valid I.D card of respective profession.
        </div>
        <div class="col-md-3">
          <button class="btn btn-upload">Submit</button>
        </div>
      </div>
  </div>
</main>

<?php require_once "scr/inc/footer.php"; ?>