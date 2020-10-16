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
        <?php foreach (Categories::getAllCategories() as $cat):?>
        <li class="list-group-item">
          <a href="<?=$cat['slug']?>"><?=$cat['name']?></a>
        </li>
       <?php endforeach;?>
      </ul>
    </div>
    </div>
    <div class="col-lg-8" id="product-area">
      <div class="row">
        <?php foreach ($user->getAllServiceProvider() as $user):?>
            <div class="col-md-6 mb-4 img-container card-body">
                <a href="service_prov.php?user=<?=$user['user_token']?>">
                    <img src="scr/img/pic1.png" alt=""  class="img-thumbnail">
                </a>
                <div class="card-footer">
                    <div class="text-muted d-flex justify-content-between">
                        <div>
                            <span>Profile Picture</span>
                        </div>
                        <div><?=$user['user_firstname'] .' '. $user['user_lastname']?></div>
                    </div>
                    <div class="text-muted d-flex justify-content-between">
                        <div><span class="text-danger">Price: $100</span></div>
                        <div><?=$user['field_of_profession']?></div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
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
