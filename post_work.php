<?php
include "process/user.pr.php";
include "scr/inc/header2.php";
// if ( $_SESSION['role_id'] !== 'service_provider'){
//     header('Location: index.php');
// }
?>
  <div class="main">

      <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Post Hand Craft Here.</div>
                <div class="card-body">
                    <?php require_once "scr/inc/messages.php"; ?>
                    <?php require_once "scr/inc/session-mgs.php"; ?>
                    <form method="post">
                        <div class="form-group">
                            <input type="hidden" name="user_token" id="" value="<?=$_SESSION['user_token']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <select name="category_slug" id="" class="form-control" required>
                                <option value="">--Select--</option>
                            <?php foreach (User::navCategory() as $nav):?>
                                <option value="<?=$nav['parent']?>"><?=$nav['categories']?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Name of work" class="form-control mt-4" name="name_work">
                        </div>
                        <!-- <div class="form-group">
                            <input type="file" placeholder="Upload Craft" class="form-control mt-4" name="file">
                        </div> -->
                        <div class="col-md-3">
                            <input type="file" id="" class="form-control" name="file" value="<?= isset($_FILES['file'])? $_FILES['file'] : ''?>">
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-primary btn-lg" name="post_craft">Post</button></div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

  <?php require_once "scr/inc/footer.php"; ?>