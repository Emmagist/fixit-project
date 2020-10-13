<?php
 require_once "scr/inc/header1.php"; 
 require_once "controllers/init.php";
?>

  <div class="container">
    <h3 class="text-center mt-5" style="font-size: 24px; font-weight: bolder;">Frequently Asked Questions</h3>
    <p class="text-center mb-5" style="font-size: 18px; font-weight: bold;">We Have Answers To Your Possible Questions</p>
    <?php
      $faqs = User::getFaq();
      if ($faqs) :
        foreach ($faqs as $faq) :
    ?>
    <div class="row">
      <div class="col-md-9 col-one mt-5"id="faq-container" >
        <div class="row faq-row">
          <div class="col-md-1">
            <span class="faq-col-span"><img src="scr/img/yellow.jpg" alt=""></span>
          </div>
          <div class="col-md-10">
            <h5 style="font-size: 18px; margin-left: -50px;"><?=$faq['title']?></h5>
          </div>
        </div>
        <p class="" style="font-size: 15px;"><?=$faq['question']?></p>
      </div>
      <div class="col-md-3"></div>
    </div>
    <?php endforeach; endif;?>
  </div>
  
<?php require_once "scr/inc/footer.php"; ?>