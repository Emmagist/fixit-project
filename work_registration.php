<?php
include "process/user.pr.php";
include "scr/inc/header2.php";
if ( $_SESSION['role_id'] !== 'service_provider'){
    header('Location: index.php');
}
?>
  <div class="main">

      <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registration for a work category</div>
                <div class="card-body">
                    <?php require_once "scr/inc/messages.php"; ?>
                    <?php require_once "scr/inc/session-mgs.php"; ?>
                    <form method="post">
                        <div class="form-group">
                            <input type="hidden" name="user_token" id="" value="<?=$_SESSION['user_token']?>">
                        </div>
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <select name="category_slug" id="" class="form-control" required>
                                <option value="">--Select--</option>
                            <?php foreach (Categories::getAllCategories() as $cat):?>
                                <option value="<?=$cat['slug']?>"><?=$cat['name']?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" name="work_registration">Submit</button>
                    </form>
                </div>
            </div>
        </div>
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