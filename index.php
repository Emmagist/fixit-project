<?php
include "process/user.pr.php";
include "scr/inc/header1.php";
?>


<div class="container mt-5" id="first-container">
  <div class="container  text-center mb-5 mt-4" id="mainbody-title">
      <?php if(isset($_GET['cat'])):?>
      <?php foreach (User::selectCategoryName($_GET['cat']) as $data):?>
        <h1 class="text-uppercase"><?=$data['name']?></h1>
        <p>A SINGLE PLACE, MILLIONS OF CREATIVE TALENTS</p>
        <?php endforeach;?>
      <?php else:?>
          <h1>ALL CATEGORIES</h1>
          <p>A SINGLE PLACE, MILLIONS OF CREATIVE TALENTS</p>
      <?php endif;?>
  </div>
  <div class="row">
    <div class="col-md-4">
    <div class="card-header">
      Categories
    </div>
    <div class="card-body">
    <ul class="list-group">
        <?php foreach (Categories::getAllCategories() as $cat):?>
        <li class="list-group-item">
          <a href="?cat=<?=$cat['slug']?>"><?=$cat['name']?></a>
        </li>
       <?php endforeach;?>
      </ul>
    </div>
    </div>
    <div class="col-lg-8" id="product-area">
      <div class="row">

          <?php if(isset($_GET['cat'])):?>
          <?php if(!empty(User::searchByCategory($_GET['cat']))):?>
            <?php foreach ( User::searchByCategory($_GET['cat']) as $user):?>
                      <div class="col-md-6 mb-4 img-container card-body">
                          <a href="service_prov.php?user=<?=$user['user_token']?>">
                              <?php if(!empty($user['work_image'])) :?>
                                  <img src="<?=$user['work_image']?>" alt=""
                                       class="card-img-top img-thumbnail" style="">
                              <?php else:?>
                                  <img src="https://via.placeholder.com/150" alt=""
                                       class="card-img-top img-thumbnail" style="">
                              <?php endif;?>
                          </a>
                          <div class="card-body">
                              <div class="text-muted d-flex justify-content-between">
                                  <div>
                                       <span>
                                       <img src="<?=$user['profile_image']?>" alt=""
                                            class=""
                                            style="width: 13%; height: 30px; border-radius: 50%">
                                        </span>
                                  </div>
                                  <div><?=$user['user_firstname'] .' '. $user['user_lastname']?></div>
                              </div>
                              <div class="text-muted d-flex justify-content-between">
                                  <div><span class="text-danger">Price: <?=$user['price']?></span></div>
                                  <div><?=$user['name']?></div>
                              </div>
                          </div>
                      </div>
          <?php endforeach;?>
          <?php else:?>
                  <div class="col-md-6 mb-4 img-container card-body">
                      <P class="text-danger">NO DATE UNDER THIS CATEGORY AT THE MOMENT</p>
                  </div>
          <?php endif;?>
          <?php else: ?>
              <?php foreach ($user->multSelectQueryForServiceProvider() as $user):?>
                  <div class="col-md-6 mb-4 img-container card-body">
                      <a href="service_prov.php?user=<?=$user['user_token']?>">
                          <?php if(!empty($user['work_image'])) :?>
                              <img src="<?=$user['work_image']?>" alt=""
                                   class="card-img-top img-thumbnail" style="">
                          <?php else:?>
                              <img src="https://via.placeholder.com/150" alt=""
                                   class="card-img-top img-thumbnail" style="">
                          <?php endif;?>
                      </a>
                      <div class="card-body">
                          <div class="text-muted d-flex justify-content-between">
                              <div>
                                  <span>
                                       <img src="<?=$user['profile_image']?>" alt=""
                                            class=""
                                            style="width: 13%; height: 30px; border-radius: 50%">
                                  </span>
                              </div>
                              <div><?=$user['user_firstname'] .' '. $user['user_lastname']?></div>
                          </div>
                          <div class="text-muted d-flex justify-content-between">
                              <div><span class="text-danger">Price: <?=$user['price']?></span></div>
                              <div><?=$user['name']?></div>
                          </div>
                      </div>
                  </div>
              <?php endforeach;?>
          <?php endif;?>

      </div>
    </div>
  </div>

</div>

  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title">
            <b>Popular Professional Services</b>
          </div>          
        </div>
      </div>

      <div class="row">
        <?php if(User::getPopularWorkDone())?>
        <?php foreach (User::getPopularWorkDone() as $provider):?>
          <div class="col-md-4">
            <a href="service_prov.php?user=<?=$provider['user_token']?>">
              <div class="prof-services" style="background-image: url('<?=$provider['work_image']?>'); background-repeat:no-repeat;">
                <div class="prof-header">
                <?php if(isset($provider['category_slug']) == "Web-Development"):?>
                  <?php echo "Customize your site";?>
                  <?php elseif(isset($provider['category_slug']) == "Tailoring"):?>
                    <?php echo "Sow what you need";?>
                  <?php elseif(isset($provider['category_slug']) == "Welding"):?>
                    <?php echo "Metal work";?>
                  <?php elseif(isset($provider['category_slug']) == "Capentry"):?>
                    <?php echo "Fix or create a furniture";?>
                  <?php elseif(isset($provider['category_slug']) == "Photography"):?>
                    <?php echo "Take a picture you love";?>
                  <?php elseif(isset($provider['category_slug']) == "Music"):?>
                    <?php echo "Share your voice";?>
                  <?php endif;?>
                </div>
                <h2 class="profession">
                  <?=$provider['category_slug'];?>
                </h2>
              </div>
            </a>
          </div>
        <?php endforeach;?>
        <!-- <div class="col-md-4">
          <div class="prof-services" style="background-image: url('scr/img/slide1.jpg'); background-repeat:no-repeat;">
            <div class="prof-header">
              Sow what you need
            </div>
            <h2 class="profession">
              Tailoring
            </h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="prof-services" style="background-image: url('scr/img/slide1.jpg'); background-repeat:no-repeat;">
            <div class="prof-header">
              Share your voice
            </div>        
            <h2 class="profession">
              Voice Over
            </h2>
          </div>
        </div> -->
      </div>

      <!-- <div class="row">
        <div class="col-md-4">
          <div class="prof-services2" style="background-image: url('scr/img/slide1.jpg');  background-repeat:no-repeat;">
            <div class="prof-header">
              Metal work
            </div>
            <h2 class="profession">
              Welding
            </h2>
          </div>
          </div>
        <div class="col-md-4">
          <div class="prof-services2" style="background-image: url('scr/img/slide1.jpg'); background-repeat:no-repeat;">
            <div class="prof-header">
              Fix or create a furniture
            </div>
            <h2 class="profession">
              Capentry
            </h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="prof-services2" style="background-image: url('scr/img/slide1.jpg'); background-repeat:no-repeat;">
            <div class="prof-header">
              Take a picture you love
            </div>
            <h2 class="profession">
              Photography
            </h2>
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col-md-12">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o prof_span-color"></i></span> We would love you to be a part of us and explore the work place
          </div>
        </div>
        <div class="col-md-12">
          <div class="paragraph last-paragraph">
          <span><i class="fa fa-check-circle-o prof_span-color"></i></span> We have one of the best verification system, your safety is really our concern
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="title">
            <b>CATEGORIES</b>
          </div>  
        </div>
      </div>

      <div class="row">
      <?php foreach (Categories::getAllCategories() as $cat):?>
        <div class="col-md-6"><div class="categories"><a href="provider.php?cat=<?=$cat['slug']?>" style="color:#fff;text-decoration:none;"><?=$cat['name']?></a></div></div>
        <?php endforeach; ?>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="paragraph">
            <div>
              Get your work done faster on <img style="width:10%;" src="scr/img/Fixitlogo transparent.png" alt=""> With confidence.
            </div>
            <div> </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o prof_span-color"></i></span> <b>Lorem Ispur</b>
          </div>
          <div class="prof_services-col">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ratione at corporis deleniti officia dolore commodi tempora excepturi beatae pariatur.
          </div>
       
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o prof_span-color"></i></span> <b>Lorem Ispur</b>
          </div>
          <div class="prof_services-col">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas est illum, aspernatur quia animi libero sed voluptatibus dicta pariatur autem.
          </div>

          <div class="paragraph">
            <span><i class="fa fa-check-circle-o prof_span-color"></i></span> <b>Lorem Ispur</b>
          </div>
          <div class="prof_services-col">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas est illum, aspernatur quia animi libero sed voluptatibus dicta pariatur autem.
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="video">
          <video style="width: 100%;" class="bg-video__content" autoplay muted loop>
            <source src="scr/img/video.mp4" type="video/mp4">
            <source src="scr/img/video.webm" type="video/webm">
            Your browser is not supported!      
          </video>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="get-started">
            <div class="get-started__text">
              <font style="font-size: 30px;">find freelancers to fulfill your needs</font><br>
              we got you covered in every area
            </div>
            <a style="text-decoration:none;" href="signup.php" class="get-started-btn">GET STARTED</a>
          </div>
        </div>
      </div>
  </div>
</main>

<?php include "scr/inc/footer.php"; ?>
<script>
document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.navigation').classList.toggle('active');
    
    });
</script>
