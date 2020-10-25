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
            <?php foreach (User::getUserByToken($_SESSION['user_token']) as $user1):?>
             <div class="pic-area">
                <img src="<?=$user1['profile_image']?>" alt="profile-picture">
                <div class="mt-5 ml-4">
                  <p id="pic-area-name" class="mb-3"><?=$user1['user_firstname'] . ' ' . $user1['user_lastname']?></p>
                    <?php if ($_SESSION['service_role'] === 'service_provider'):?>
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
                     <?php endif;?>
                  <p class="verified-onsmall text-uppercase"><?=$user1['verified']?></p>
                </div>

             </div>
          <div>
            <button class="btn btn-outline-secondary btnpic mt-3" id="profilebtnupdt1">Change Profile Picture</button>
            <button class="btn  btnpic" id="profilebtnupdt2">Upgrade To Pro</button>  
          </div>
            <?php endforeach;?>
        </div>
        <div class="col-md-04">
            <?php foreach (User::getUserByToken($_SESSION['user_token']) as $user1):?>
            <div class="verified"> <h4 class="text-center text-uppercase"><?=$user1['verified']?></h4></div>
            <?php endforeach;?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="small-screen">
          <div class="pic-areasmall">
              <?php foreach (User::getUserByToken($_SESSION['user_token']) as $user1):?>
              <img src="<?=$user1['profile_image']?>" alt="profile-picture">
              <div class="mt-5">
                <p id="pic-area-name"><?=$user1['user_firstname'] . ' ' . $user1['user_lastname']?></p>
                <?php if ($_SESSION['service_role'] === 'service_provider'):?>
                <a href="#">Top Rated Seller</a>
                <p>
                <i class="fa fa-star" id="star-icon">
                  <i class="fa fa-star">
                  <i class="fa fa-star"><span class="text-dark">(1k+)</span></i>
                  </i>
                </i>
                </p>
                <?php endif;?>
                <p class="verified-onsmall text-uppercase"><?=$user1['verified']?></p>
              </div>  
              <div>
                <button class="btn btn-outline-secondary btnpic mt-3" id="profilebtnupdt1">Change Profile Picture</button>
                <button class="btn  btnpic" id="profilebtnupdt2">Upgrade To Pro</button>
              </div>
              <?php endforeach;?>
          </div>
        </div>
      </div>
   
    </div>
  </main>
  
  <main class="second-main p-5">
    <h5 class="text-center">
    <?php if ($_SESSION['service_role'] === 'service_provider'):?>
        About Seller
    <?php else:?>
        About You
    <?php endif;?>
    </h5>
    <div class="container" id="second-div">
      
      <div class="row" id="second-divch2">
        <?php foreach (User::getUserByToken($_SESSION['user_token']) as $user1):?>
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">FROM</h6>
          <p class="text-primary"><?=$user1['state_of_residence']?> State</p>
        </div>
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">MEMEBER SINCE</h6>
          <p class="text-primary"><?=$user1['register_at']?></p>
        </div>
        <div class="col-4 mt-2">
            <?php if ($_SESSION['service_role'] === 'service_provider'):?>
          <h6 class="detail text-muted">AVG RESPONSE TIME</h6>
          <p class="text-primary"> 15 minute</p>
            <?php endif;?>
        </div>
        <?php endforeach;?>
      </div>
      <div class="mt-2">
          <?php foreach (User::getUserByToken($_SESSION['user_token']) as $user1):?>
        <p><?=$user1['description']?></p>
          <?php endforeach;?>
      </div>
  </main>


    <main class="main" id="third-main">
      <div class="container">

            <button class="btn btn-outline-secondary" id="profileeditbtn" type="submit">Edit Profile</button>
            <?php if ($_SESSION['service_role'] === 'service_provider'):?>
            <div class="mt-5">
              <h5>CURRENT SKILLS</h5>
              <ul class="list-group">
                    <?php foreach($user->multSelectQueryForSingleServiceProvider($_SESSION['user_token']) as $user):?>
                <li lass="list-item">
                <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                   <?=$user['name']?></li>
                    <?php endforeach;?>
              </ul>
              <a href="work_registration.php" class="btn btn-outline-secondary mt-5" id="profileeditbtn" type="submit">Edit Skill</a>
            </div>
            <?php endif;?>
      </div>
  </main>


  <?php require_once "scr/inc/footer.php"; ?>