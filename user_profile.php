<?php
  require_once "scr/inc/header2.php";
  include "process/user.pr.php";
  if (!isset($_SESSION['user_token'], $_SESSION['verified'])) {
    header('location: index.php');
  }
?>
  <main class='main'>
    <div class="container text-center" id="first-div">
      <div class="row" >
        <div class="col-md-8" id="large-screen">
          <?php
            if (isset($_SESSION['user_token'])) {
              $token = $_SESSION['user_token'];
              // echo $token;exit;
              $user_token = $user->getUserByToken($token);
              // $fun->arrayPrinter($user_token);exit;
              foreach ($user_token as $key) {
          ?>
          <div class="pic-area">
            <img src="<?= $key['profile_image']?>" alt="profile-picute">
            <div class="mt-5 ml-4">
              <p id="pic-area-name" class="mb-3"><?=  $key['user_firstname'].' '.$key['user_lastname']; ?></p>
              <a href="#">Top Rated Seller</a>
              <i class="fa fa-star" id="star-icon">
                <i class="fa fa-star">
                <i class="fa fa-star">
                <i class="fa fa-star">
                <i class="fa fa-star"><span class="text-dark">(1k+)</span></i>
                </i>
                </i>
                </i>
              </i>
              <p class="verified-onsmall"><?=strtoupper($key['verified']);?></p>
            </div>  
          </div>
          <div>
          <button class="btn btn-outline-secondary btnpic mt-3" id="profilebtnupdt1">Change Profile Picture</button>
            <button class="btn  btnpic" id="profilebtnupdt2">Upgrade To Pro</button>  
          </div>
          
        </div>
        <div class="col-md-04">
          <div class="verified"> <h4 class="text-center"><?=strtoupper($key['verified'])?></h4></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8"id="small-screen">
          <div class="pic-areasmall">
              <img src="scr/img/2.jpg" alt="profile-picute">
              <div class="mt-5">
                <p id="pic-area-name"><?=$key['user_firstname'].' '.$key['user_lastname']?></p>
                <a href="#">Top Rated Seller</a>
                <p>
                <i class="fa fa-star" id="star-icon">
                  <i class="fa fa-star">
                  <i class="fa fa-star"><span class="text-dark">(1k+)</span></i>
                  </i>
                </i>
                </p>
                <p class="verified-onsmall"><?=$key['verified']?></p>
              </div>  
              <div>
            <button class="btn btn-outline-secondary btnpic mt-3" id="profilebtnupdt1">Change Profile Picture</button>
              <button class="btn  btnpic" id="profilebtnupdt2">Upgrade To Pro</button>  
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>
  
  <main class="second-main p-5">
    <h5 class="text-center">About Seller</h5>
    <div class="container" id="second-div">
      
      <div class="row" id="second-divch2">
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">FROM</h6>
          <p class="text-primary"><?=$key['state_of_residence'];?></p>
        </div>
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">MEMEBER SINCE</h6>
          <p class="text-primary"><?=$key['regester_at'];?></p>
        </div>
        <div class="col-4 mt-2">
          <h6 class="detail text-muted">AVG RESPONSE TIME</h6>
          <p class="text-primary"> 15 minute</p>
        </div>
      </div>
      <div class="mt-2">
        <p><?=$key['description'];?></p>
      </div>
  </main>

  <main class="main" id="third-main">
  <div class="container">
        <button class="btn btn-outline-secondary " id="profileeditbtn" type="submit">Edit About</button>
        <div class="mt-5">
          <h5>CURRENT SKILLS</h5>
          <ul class="list-group">
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
               Graphics designer</li>
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
              Logo designer</li>
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
              web developer</li>
          </ul>
          <button class="btn btn-outline-secondary mt-5" id="profileeditbtn" type="submit">Edit Skill</button>
          <button class="btn btn-outline-secondary mt-4" id="profileeditaddressbtn" type="submit" class="modal-btn">Edit Address</button>
        </div>

              <?php }}; ?>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    </div>
    
    <!-- <div class="modal-bg">
    <div class="modal">
      <h2>Subscribe to our thang</h2><br>
      <label for="name">Name: </label>
      <input type="text" address="address"><br><br>
      <button>Subscribe</button>
      <span class="modal-close">X</span>
    </div> -->
  </div>
  </main>

  <script>
    
  </script>
  

   
  <?php require_once "scr/inc/footer.php"; ?>