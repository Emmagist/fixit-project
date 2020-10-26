<?php
  require "process/chatbox.pr.php";
  $provider_token = $_GET['provider_token'];
  $employer_token = $_SESSION['user_token'];
  foreach($user->getUserByServiceEmployer($employer_token) as $data){
    $employer_name = $data['user_lastname'];
  }
  // Functions::arrayPrinter($employer_name);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fixit</title>
  <link rel="stylesheet" href="scr/css/style_sub_cat.css">
  <link rel="stylesheet" href="scr/css/bootstrap.min.css">
</head>
<body style="background: rgb(39, 2, 2); justify-content:center">
<a href="service_prov.php" class="back mt-3 text-white" style="border-radius:50%;font-weight:bolder;font-size:24px;background:black;width:40px;text-decoration:none"><<</a>
  <div class="chat-wrapper " >
    <div class="row">
      <div class="chat-left col-md-4">
        <div class="row">
          <div class="col-md-8">
            <p>rtertdtrfyrtfryt</p>
          </div>
          <div class="col-md-2 mt-4">
            <p>16:17</p>
          </div>
        </div>
      </div>
      <div class="chat-empty text-white col-md-8"></div>
    </div>
    <div class="row">
      <?php foreach(User::getSingleUserFromChatBox($employer_token) as $getsender):?>
      <div class="chat-empty col-md-7"></div>
      <div class="chat-right col-md-4">
        <p><?=$getsender['message'];?></p>
        <div class="row">
          <div class="col-md-2 mr-4 mt-4">
          <p><?=substr($getsender['time'],0,5);?></p>
          </div>
          <div class="col-md-8">
            <p></p>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <form action="" class="chat-form" method="POST">
      <div class="main-chat row">
          <div class="col-md-10">
            <input type="hidden" class="form-control" name="receiver_token" value="<?php echo $provider_token;?>">
            <input type="hidden" class="form-control" name="sender_token" value="<?php echo $employer_token?>">
            <input type="hidden" class="form-control" name="sender_name" value="<?php echo $employer_name?>">
            <input type="text" class="form-control" name="message">
          </div>
          <div class="col-md-2">
            <?php require_once "scr/inc/messages.php";?>
            <button type="submit" class="btn btn-success" name="chatbox_button">Send</button>
          </div>
      </div>
    </form>
  </div>
</body>
</html>