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
            <?php if(isset($_GET['cat'])):?>
        <?php foreach (User::selectCategoryName($_GET['cat']) as $data):?>
        <div class="card-header" id="card-header">
            <?=ucwords($data['name']);?>
        </div>
            <?php endforeach;?>
        <?php endif;?>
        <div class="card-body">
            <ul class="list-group">
                <?php if (isset($_GET['id'])):$id=$_GET['id'];?>
                    <?php foreach (User::getAllSubCategories($id) as $cat):?>
                        <li class="">
                            <span><img src="scr/img/yellow.jpg" alt="" style="width:5%" class="mr-2 mb-2"></span>
                            <a href="?parent=<?=$cat['sub_cat']?>" style="color:gray;"><?=$cat['sub_cat']?></a>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <div class="col-lg-8" id="product-area">
      <div class="row">

          <?php if(isset($_GET['parent'])):?>
          <?php if(!empty(User::searchByCategoryId($_GET['parent']))):?>
                <?php foreach ( User::searchByCategoryId($_GET['parent']) as $user):?>
                <?php foreach(User::getSingleServiceProvider($user['user_token']) as $token):?>
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
                                        <img src="<?=$token['profile_image']?>" alt=""
                                        class=""
                                        style="width: 13%; height: 30px; border-radius: 50%">
                                    </span>
                                </div>
                                <div><?=$token['user_firstname'] .' '. $token['user_lastname']?></div>
                            </div>
                            <div class="text-muted d-flex justify-content-between">
                                <div><span class="text-danger">Price: <?=$user['price']?></span></div>
                                <div><?=$user['sub_cat']?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <?php endforeach;?>
          <?php else:?>
                  <div class="col-md-6 mb-4 img-container card-body">
                      <P class="text-danger">NO DATE UNDER THIS CATEGORY AT THE MOMENT</p>
                  </div>
          <?php endif;?>
          <?php else: ?>
              <?php foreach ($user->getAllSubCategories($id) as $user):?>
                <?php foreach(User::getSingleServiceProvider($user['user_token']) as $token):?>
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
                                       <img src="<?=$token['profile_image']?>" alt=""
                                            class=""
                                            style="width: 13%; height: 30px; border-radius: 50%">
                                  </span>
                              </div>
                              <div><?=$token['user_firstname'] .' '. $token['user_lastname']?></div>
                          </div>
                          <div class="text-muted d-flex justify-content-between">
                              <div><span class="text-danger">Price: <?=$user['price']?></span></div>
                              <div><?=$user['sub_cat']?></div>
                          </div>
                      </div>
                  </div>
              <?php endforeach;?>
              <?php endforeach;?>
          <?php endif;?>

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