<?php require "../../process/modal.pr.php";?>

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