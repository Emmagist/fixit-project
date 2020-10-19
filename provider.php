<?php
  include "process/user.pr.php";
  include "scr/inc/header2.php";

  if (!isset($_SESSION['user_token'], $_SESSION['verified'])) {
    header('location: login.php');
  }
  
?>
  <div class="main">
  <?php foreach ($user->getAllServiceProvider() as $user):?>
    <h3>Logo's</h3>
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="card" id="sub-cat-card">
          <img src="scr/img/slide1.jpg" class="card-img-top" alt="...">
          <div class="card-body main-card">
            <div class="row mb-1">
              <div class="col-md-2"><img src="<?=$user['profile_image'] ?>" alt="" class="icon-img"></div>
              <div class="col-md-10"><h5><?=$user['user_firstname'] .' '. $user['user_lastname']?></h5></div>
            </div>
            <p class="card-text text-truncate"><?=$user['description'];?></p>
            <i class="fa fa-star star-icon"></i> <span>(1k.+)</span>
          </div><hr>
          <div class="row" id="cat-main-li-div">
            <div class="col-md-6 main-li-div">
              <ul>
                <li><i class="fa fa-heart mr-1" aria-hidden="true"></i></li>
                <li><i class="fa fa-heart" aria-hidden="true"></i></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div><p class="p text-left">Starting At <strong>#5k</strong></p>
              </div>
            </div>
          </div>
          <div class="p-1"><a href="service_prov.php?user_token=<?=$user['user_token'];?>" class="btn btn-info btn-sm p-2 btn-block">View More</a></div>
        </div>
      </div>
    <?php endforeach;?>

      </div>
    </div>

  <div class="main-two  ml-5 mr-5 text-center pl-2 pr-3" id="main-two">
    <h3 class="mb-3 mt-2">Why you need A Logo For Your Business?</h3>
    <div class="row text-center">
      <div class="col-md-6 text-center">
        <p><span class="span-main-two"><i class="fa fa-check-circle-o mr-3"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit, ipsa assumenda eligendi, perferendis voluptatem blanditiis perspiciatis rem dolores fugiat dolor, dolore fugit. Perspiciatis veritatis pariatur repellat aliquid nulla vitae.</p>
        <p><span class="span-main-two"><i class="fa fa-check-circle-o mr-3"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit, ipsa assumenda eligendi, perferendis voluptatem blanditiis perspiciatis rem dolores fugiat dolor, dolore fugit. Perspiciatis veritatis pariatur repellat aliquid nulla vitae.</p>
      </div>
      <div class="col-md-6 text-center">
      <p><span class="span-main-two"><i class="fa fa-check-circle-o mr-3"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit, ipsa assumenda eligendi, perferendis voluptatem blanditiis perspiciatis rem dolores fugiat dolor, dolore fugit. Perspiciatis veritatis pariatur repellat aliquid nulla vitae.</p>
      <p><span class="span-main-two"><i class="fa fa-check-circle-o mr-3"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit, ipsa assumenda eligendi, perferendis voluptatem blanditiis perspiciatis rem dolores fugiat dolor, dolore fugit. Perspiciatis veritatis pariatur repellat aliquid nulla vitae.</p>
      </div>
    </div>
  </div>

  <?php require_once "scr/inc/footer.php"; ?>