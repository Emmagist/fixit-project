<?php
include "process/user.pr.php";
include "scr/inc/header1.php";
?>


<div class="container mt-5" id="first-container">
  <div class="container  text-center mb-5 mt-4" id="mainbody-title">
    <h1>GRAPHICS & DESING</h1>
    <p>A SINGLE PLACE, MILLIONS OF CREATIVE TALENTS</p>
  </div>
  <div class="row">
    <div class="col-md-4">
    <div class="card-header">
      Categories
    </div>
    <div class="card-body">
    <ul class="list-group">
        <li class="list-group-item">
          <a href="">Designer & Creatativity</a>
        </li>
        <li class="list-group-item">
          <a href="">Web Development</a>
        </li>
      </ul>
    </div>
    </div>
    <div class="col-lg-8" id="product-area">
      <div class="row">
        <div class="col-md-6 mb-4 img-container">
          <img src="scr/img/pic1.png" alt=""  class="img-thumbnail">
        </div>
        <div class="col-md-6  mb-4 img-container">
        <img src="scr/img/wood-shaving.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6 mb-4 img-container">
        <img src="scr/img/hands-typing-code-on-laptop.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6 mb-4 img-container">
        <img src="scr/img/green-t-shirt.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6  mb-4 img-container">
        <img src="scr/img/wood-shaving.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6 mb-4 img-container">
        <img src="scr/img/hands-typing-code-on-laptop.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6 mb-4 img-container">
          <img src="scr/img/pic1.png" alt=""  class="img-thumbnail">
        </div>
        <div class="col-md-6  mb-4 img-container">
        <img src="scr/img/wood-shaving.jpg" alt="" class="img-thumbnail">
        </div>
      </div>
    </div>
  </div>

</div>
<?php include "scr/inc/footer.php"; ?>
<script>
document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.navigation').classList.toggle('active');
    
    });
</script>
