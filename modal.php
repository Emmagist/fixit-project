<?php
  require "process/user.pr.php";
  include "scr/inc/header2.php";
  // if (isset($_GET['id']) && ($_GET['p'])) {
  //   $id = $_GET['id'];
  //   $price = $_GET['p'];
  // }

?>

<!-- The Modal -->
<div class="" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Work</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form-group" method="post">
            <?php require_once "scr/inc/session-mgs.php";?>
            <?php require_once "scr/inc/messages.php";?>
            <input type="hidden" class="form-control mb-4" placeholder="" name="id" value="<?php echo $_GET['id'];?>">
            <input type="text" class="form-control mb-4" placeholder="Edit Price" name="price" value="<?php echo $_GET['p'];?>" required>
            <button type="submit" class="btn btn-success" name="edit_price_button">Edit Price</button>
          </form>
        </div>
        
        
        
      </div>
    </div>
  </div>