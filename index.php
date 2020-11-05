<?php
include "process/user.pr.php";
include "scr/inc/header1.php";
?>

<main class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title mb-3 mt-3" style="font-size:24px;">
            <h1><b>Popular Professional Services</b></h1>
          </div>          
        </div>
      </div>

      <div class="row">
        <?php if(User::getPopularWorkDone())?>
          <?php foreach (User::getPopularWorkDone() as $provider):?>
            <div class="col-md-4">
              <a href="service_prov.php?user=<?=$provider['user_token']?>">
                <div class="prof-services mt-5" style="background-image: url('<?=$provider['work_image']?>'); background-repeat:no-repeat;height:50vh"">
                  <div class="prof-header">
                    <?php if(isset($provider['category_slug']) == "Web-Development"):?>
                      <?php echo "Customize your site";?>
                      <?php elseif(isset($provider['category_slug']) == "Tailoring"):?>
                        <?php echo "Sow what you need";?>
                      <?php elseif(isset($provider['category_slug']) == "Programming-Tech"):?>
                        <?php echo "Be the light";?>
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
                  <h2 class="profession"><?=$provider['category_slug'];?></h2>
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
          <div class="paragraph mt-4">
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
            <h2><b>CATEGORIES</b></h2>
          </div>  
        </div>
      </div>

      <div class="row">
      <?php foreach (Categories::getAllCategories() as $cat):?>
        <div class="col-md-6"><div class="categories"><a href="category.php?cat=<?=$cat['slug'] .'&'.'id='.$cat['id'];?>" style="color:#fff;text-decoration:none;"><?=$cat['name']?></a></div></div>
        <?php endforeach; ?>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="paragraph" id="paragraph">
            <div>
              Get your work done faster on<img style="width:10%;" src="scr/img/Fixitlogo transparent.png" alt="">With confidence.
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

      <div class="row  mt-5">
        <div class="col-md-12">
          <div class="get-started">
            <div class="get-started__text" style="font-size: 24px;">
              <font style="font-size: 35px;">find freelancers to fulfill your needs</font><br>
              we got you covered in every area
            </div>
            <a style="text-decoration:none; h" href="signup.php" class="get-started-btn">GET STARTED</a>
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
