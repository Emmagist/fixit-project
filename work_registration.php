<?php
include "process/user.pr.php";
include "scr/inc/header2.php";
if ($_SESSION['service_role'] !== 'service_provider'){
 header('Location: index.php');
}
?>
  <div class="main">

      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Skill Set</div>
                <div class="card-body">
                    <?php require_once "scr/inc/messages.php"; ?>
                    <?php require_once "scr/inc/session-mgs.php"; ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Sub-category</th>
                                <th>Price</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach (User::getProviderJobSkills($_SESSION['user_token']) as $userSkill):?>
                        <tr>
                            <td class="text-capitalize"><?=$userSkill['category_slug']?></td>
                            <td class="text-capitalize"><?=$userSkill['sub_cat']?></td>
                            <td><?=$userSkill['price']?></td>
                            <td>
                                <img src="<?=$userSkill['work_image']?>" alt="" style="height: 50px;">
                            </td>
                            <td>
                                <a href="modal.php?id=<?=$userSkill['id'].'&p='.$userSkill['price'];?>" class="btn btn-sm text-primary" id="" >Edit</a>
                                <a href="?id=<?=$userSkill['id'];?>" class="btn btn-sm text-danger" id="" >Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                    <?php
                        if (isset($_GET['id'])) {
                            // "<script>alert('Delete work');</script>";
                            $id = $_GET['id'];
                            User::DeleteWorkPosted($id);
                            echo "<script>windows.reload();</script>";
                        }
                    ?>

                </div>
            </div>
        </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">Registration for a work category</div>
                  <div class="card-body">
                      <?php require_once "scr/inc/messages.php"; ?>
                      <?php require_once "scr/inc/session-mgs.php"; ?>
                      <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <input type="hidden" name="user_token" id="" value="<?=$_SESSION['user_token']?>">
                            </div>
                            <div class="form-group">
                              <label for="">Choose a category for your work</label>
                              <select name="category_slug" id="" class="form-control" required>
                                  <option value="">--Select--</option>
                                  <?php foreach (Categories::getAllCategories() as $cat):?>
                                      <option value="<?=$cat['slug']?>"><?=$cat['name']?></option>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Choose a sub-category for your work</label>
                              <select name="sub_category" id="" class="form-control" required>
                                  <option value="">--Select--</option>
                                  <?php foreach (Categories::getAllSubCategories() as $cat):?>
                                      <option value="<?=$cat['sub_cat']?>"><?=$cat['sub_cat']?></option>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Price In Naira</label>
                              <input type="text" name="price" class="form-control" placeholder="Enter Price" id="price" required>
                            </div>
                            <div class="form-group">
                              <label for="">Upload an image of your work</label>
                              <input type="file" name="file" class="form-control" placeholder="Enter Image" id="file" required>
                            </div>
                          <button type="submit" class="btn btn-primary btn-sm" name="work_registration">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>


  <?php require_once "scr/inc/footer.php"; ?>
  <?php require_once "modal.php"; ?>

  