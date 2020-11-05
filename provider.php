<?php
  include "process/user.pr.php";
  include "scr/inc/header2.php";

//  if (!isset($_SESSION['user_token'], $_SESSION['verified'])) {
//    header('location: login.php');
//  }
// if (isset($_GET['id'])) {
//     echo $id=$_GET['id'];
// }
  
?>
  <div class="main">
    <h3>Logo's</h3>
    <div class="row mb-5">

        <?php if(isset($_GET['cat'])):?>
            <?php if(!empty(User::searchByCategory($_GET['cat']))):?>
                <?php foreach (User::searchByCategory($_GET['cat']) as $user):?>
                    <div class="col-md-3">
                        <div class="card" id="sub-cat-card">
                            <?php if(!empty($user['work_image'])) :?>
                                <img src="<?=$user['work_image']?>" alt=""  class="card-img-top img-thumbnail">
                            <?php else:?>
                                <img src="https://via.placeholder.com/150" alt=""
                                     class="card-img-top img-thumbnail" style="height: 12.5rem">
                            <?php endif;?>
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
                                    <div><p class="p text-left text-success">Starting At <strong class=""><?=$user['price']?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-1">
                                <?php    if ($fun->ifLoggedIn()):?>
                                    <a href="service_prov.php?user=<?=$user['user_token']?>" class="btn btn-info btn-sm p-2 btn-block">View More</a>
                                <?php else:?>
                                    <button  title="login to view"  class="btn btn-info btn-sm p-2 btn-block disabled">View More</button>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else:?>
                <div class="col-md-6 mb-4 img-container card-body">
                    <P class="text-danger text-center">NO DATE UNDER THIS CATEGORY AT THE MOMENT</p>
                </div>
            <?php endif;?>
        <?php else:?>
            <?php foreach ($user->multSelectQueryForServiceProvider() as $user):?>
                <div class="col-md-3">
                    <div class="card" id="sub-cat-card">
                        <?php if(!empty($user['work_image'])) :?>
                            <img src="<?=$user['work_image']?>" alt=""  class="card-img-top img-thumbnail" style="height: 12.5rem">
                        <?php else:?>
                            <img src="https://via.placeholder.com/150" alt=""
                                 class="card-img-top img-thumbnail" style="height: 12.5rem">
                        <?php endif;?>

                        <div class="card-body main-card">
                            <div class="row mb-1">
                                <div class="col-md-2"><img src="<?=$user['profile_image'] ?>" alt="" class="icon-img"></div>
                                <div class="col-md-10"><h5><?=ucwords($user['user_firstname'] .' '. $user['user_lastname']);?></h5></div>
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
                                <div><p class="p text-left text-success">Starting At <strong ><?=$user['price']?></strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="p-1">
                            <?php    if ($fun->ifLoggedIn()):?>
                            <a href="service_prov.php?user=<?=$user['user_token']?>" class="btn btn-info btn-sm p-2 btn-block">View More</a>
                            <?php else:?>
                                <button  title="login to view"  class="btn btn-info btn-sm p-2 btn-block disabled">View More</button>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
      <?php endif;?>

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