<?php 
  require_once "scr/inc/header2.php"; 
  include "process/user.pr.php";
  //require "controllers/init.php";
  $provider_token = $_GET['user'];
?>
  <?php if (!isset($_GET['user'])):
    header("Location: provider.php");?>
  <?php else :?>
     <?php foreach(User::getSingleServiceProvider($_GET['user']) as $key):?>
<div class="service_prov container">
  <div class="">
    <div class="row mt-5">
      <div class="col-md-5 main-service-col">
        <div class="row main-service-row">
          
          <div class="col-md-7"><h5><?=strtoupper($key['user_firstname']) . ' ' .  strtoupper($key['user_lastname']);?></php></h5></div>
          <div class="col-md-5 mt-1 mb-2">
          <?php $count = count(User::getChatByToken($provider_token))?>
          <?php if($_SESSION['service_role'] == 'service_provider'):?>
            <a href="view_chat.php?provider_token=<?=$key['user_token'];?>" id="chat-btn">View chats</a><i class="fa fa-bell" aria-hidden="true"><?=$count?></i>
          <?php else:?>
            <a href="chat.php?provider_token=<?=$key['user_token'];?>" id="chat-btn">Chat With Seller</a>
          <?php endif;?>
          </div>
        </div>
      </div>
      <div class="col-md-1" id="empty-service-pro-col"></div>
      <div class="col-md-2 main-service-card ">
        <!-- <div class="job_profile"></div> -->
        <div class="card" style="width: 18rem;" id="job_profile">
          <div class="card-body main-card">
            <div class="row mb-1" id="job-rate">
              <div class="col-md-2"><img src="<?php echo $key['profile_image']; ?>" alt="" class="icon-img"></div>
              <div class="col-md-9 job-rate">
                <h6><?php echo $key['user_firstname']  . ' '. $key['user_lastname']; ?></h6>
                <p>Top Rated Seller</p>
              </div>
            </div>
            <p class="card-text text-truncate"><?=$key['description'];?></p>
            <i class="fa fa-star star-icon"></i> <span class="">(1k.+)</span>
            </div><hr class=" service-prov-hr">
            <div class="row" id="cat-main-li-div">
              <div class="col-md-6 main-li-div">
                <ul>
                  <li><i class="fa fa-heart mr-1 f-1x" aria-hidden="true"></i></li>
                  <li><i class="fa fa-heart fa-1x" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="col-md-6">
              <p class="p">Starting At <strong>#5k</strong></p>
              </div>
            </div>
          </div>
        </div>
      </>
    </div>
  </div>
  <div class=" main-service-prov pl-3">
    <div class="job_done">Order Jobs Done By <?php echo $key['user_lastname']; ?></div>
    <div class="row   pb-4 pl-2">
            <?php foreach(User::getUserWorkDone($key['user_token']) as $work):?>
      <div class="col-md-4 pt-5 ">
        <div class="card service-prov-card-row card" style="width: 18rem;">
          <img src="<?=$work['work_image']?>" class="card-img-top" alt="..."style=" height:50vh">
        </div>
      </div>
      <?php endforeach?>
      
    </div>
    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
        <div class="col-md-3"><img src="scr/img/slide1.jpg" class="d-block w-100 mt-4 mb-4 mr-3" alt="..." style="height:50vh;"></div>
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div> -->
  </div>
  
  <div class="mt-5">
    <?php
      $email = User::getUserTestimony($key['user_email']);
      
      if ($email) :
        echo "<h3 class='ml-5 mb-4 testimonials'>Testimonials</h3>";
        foreach ($email as $mail) :
    ?>
    
    <div class="row" id="main-two-service-prov">
      <div class="col-md-1">
        <?php
          $picture = User::getUserTestimonyPics($mail['email_from']);
          if ($picture) :
            foreach ($picture as $pic) :
        ?>
        <img src="<?php echo $pic['profile_image']; ?>" alt="" class="icon-img-two mt-3">
            <?php endforeach;
          endif; ?>
      </div>
      <div class="col-md-11 pl-3">
      <div class=""><i class="fa fa-star service-star"> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span></i></div>
      <p>
        <?php echo $mail['user_testimony']; ?>
      </p>
      <div class=""><i class="fa fa-thumbs-o-up mr-3 helpfull-icon"> Helpful</i> <span><i class="fa fa-thumbs-o-down helpfull-icon"> Not Helpful</i></span></div>
      </div>
    </div>
    <?php endforeach; endif; ?>
  </div>
  <div class="row mt-5 ml-5">
    <div class="col-md-3 ml-5 mt-5">
      <img src="<?php echo $key['profile_image']; ?>" alt="" class="icon-img-three ml-1"><br><br>
      <?php $count = count(User::getChatByToken($provider_token))?>
      <?php if($_SESSION['service_role'] == 'service_provider'):?>
            <a href="view_chat.php?provider_token=<?=$key['user_token'];?>" id="chat-btn">View chats</a><i class="fa fa-bell" aria-hidden="true"><?=$count?></i>
          <?php else:?>
            <a href="chat.php?provider_token=<?=$key['user_token'];?>" id="chat-btn">Chat With Seller</a>
          <?php endif;?>
    </div>
    <div class="col-md-6 text-center about-wrapper mt-5">
      <h3>About Seller</h3>
      <div class="table_wrapper">
        <div class="row table_bordered">
          <div class="col-md-4 table_bord pt-2 pb-2">From <br><span class="text-primary"><?php echo $key['state_of_residence']; ?> State</span></div>
          <div class="col-md-4 table_bord pt-2 pb-2">Member<br><span>Since <span class="text-primary"><?php echo substr($key['register_at'],0,10); ?></span></span></div>
          <div class="col-md-4 table_bordere pt-2 pb-2">Avg. Response Time<br><span class="text-primary">15 Mins</span></div>
        </div>
        <div class="row text-center pr-5" id="table_bordered">
          <p class="p-2"><?=$key['description']?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  <?php endforeach;?>
  <?php endif;?>
  
  </div>
</div>

<?php require_once "scr/inc/footer.php"; ?>