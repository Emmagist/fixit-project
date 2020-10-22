<?php
    require "controllers/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Fixit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scr/css/bootstrap.min.css">
    <link rel="stylesheet" href="scr/css/index.css">
    <link rel="stylesheet" href="scr/css/footer.css">
  </head>
<body>
 <div class="container" id="index-loginbtn">
     <?php
     if (!$fun->ifLoggedIn()):?>
         <a href="login.php" class="btn">SIGN IN</a>
         <a href="signup.php" class="btn">SIGN UP</a>
     <?php endif;?>

 </div>
 <div class="nav">
    <div class="container">
      <ul>
        <?php foreach(User::navCategory() as $nav) : ?>
        <?php 
            // $id = $nav['id'];
            // $subnav = User::subNavCategory($id);

            // foreach($subnav as sub) :
        ?>
        <li>
            <a href="sub_cat.php?sub=<?=$nav['id']?>"><?=$nav['categories']?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>      
  </div>
    
  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title-about">
          <h1>ABOUT US</h1>
            <b>KNOW ABOUT WHAT WE REPRESENT AND HOW IT STARTED</b>
          </div>          
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o about_span-color"></i></span> <b>WHAT IS LOREM IPSUM</b>
          </div>
        </div>
        <div class="col-md-10 about-col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptas suscipit fugiat facere quos alias vero quam! Exercitationem iste similique sapiente adipisci suscipit dicta dolorem vero laboriosam, aliquid neque saepe!
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 about-col">
          MAKE A TYPE SPECIMEN
        </div>
      </div>

      <div class="row fig-container">
        <div class="col-md-1 perfect-middle"></div>
        <div class="col-md-3">
          <figure class="fig_shape">
            <img src="scr/img/1.jpeg" alt="" class="img_shape">
          </figure>
          <p class="paragraph">WHAT IS LOREM ISPUM<br>CR</p>
        </div>
        <div class="col-md-1 perfect-middle">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o about_span-color about_span-size"></i></span>
          </div>
        </div>
        <div class="col-md-3">
          <figure class="fig_shape">
            <img src="scr/img/1.jpeg" alt="" class="img_shape">
          </figure>
        </div>
        <div class="col-md-1 perfect-middle">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o about_span-color about_span-size"></i></span>
          </div>
        </div>
        <div class="col-md-3">
          <figure class="fig_shape">
            <img src="scr/img/1.jpeg" alt="" class="img_shape">
          </figure>
        </div>
      </div>

      <div class="row">
      <div class="col-md-12">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o about_span-color"></i></span> <b>WHAT IS LOREM IPSUM</b>
          </div>
        </div>
        <div class="col-md-10 about-col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptas suscipit fugiat facere quos alias vero quam! Exercitationem iste similique sapiente adipisci suscipit dicta dolorem vero laboriosam, aliquid neque saepe!
        </div>
        <div class="col-md-12">
          <div class="paragraph">
            <span><i class="fa fa-check-circle-o about_span-color"></i></span> <b>WHAT IS LOREM IPSUM</b>
          </div>
        </div>
        <div class="col-md-10 about-col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptas suscipit fugiat facere quos alias vero quam! Exercitationem iste similique sapiente adipisci suscipit dicta dolorem vero laboriosam, aliquid neque saepe!
        </div>
      </div>
  
    </div>
</main>
<?php require_once "scr/inc/footer.php"; ?>