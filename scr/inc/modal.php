<?php require "process/modal.pr.php";
  $token = $_GET['token'];
?>
<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit About</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form-group" method="post">
            <?php require_once "scr/inc/session-mgs.php";?>
            <?php require_once "scr/inc/messages.php";?>
            <input type="hidden" class="form-control mb-4" placeholder="" name="user_token" value="<?php echo $_SESSION['user_token'];?>">
            <input type="text" class="form-control mb-4" placeholder="Edit About" name="description"><hr>
            <div>
            <button type="submit" class="btn btn-success" name="about_modal">Save Changes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Profile Picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form-group" method="post">
            <?php require_once "scr/inc/session-mgs.php";?>
            <?php require_once "scr/inc/messages.php";?>
            <input type="hidden" class="form-control mb-4" placeholder="" name="user_token" value="<?php echo $_SESSION['user_token'];?>">
            <input type="file" class="form-control mb-4" placeholder="Upload File" name="file"><hr>
            <button type="submit" class="btn btn-success" name="profile_button">Update Profile</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Address</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form-group" method="post">
            <?php require_once "scr/inc/session-mgs.php";?>
            <?php require_once "scr/inc/messages.php";?>
            <input type="hidden" class="form-control mb-4" placeholder="" name="user_token" value="<?php echo $_SESSION['user_token'];?>">
            <input type="text" class="form-control mb-4" placeholder="Edit Address" name="address"><hr>
            <button type="submit" class="btn btn-success" name="address_modal">Save Changes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          
        </div> -->
        
      </div>
    </div>
  </div>
  
  