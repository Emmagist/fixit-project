<?php 
    require "process/chatbox.pr.php";
    $provider_token = $_GET['provider_token'];
    $employer_token = $_SESSION['user_token'];
    foreach($user->getUserByServiceEmployer($employer_token) as $data){
        $employer_name = $data['user_lastname'];
        $image = $data['profile_image'];
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="scr/css/bootstrap.min.css">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 30px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<h2>Chat Messages</h2>
<?php if(User::getSingleProviderFromChatBox($provider_token,$employer_token)):?>
<?php foreach(User::getSingleProviderFromChatBox($provider_token,$employer_token) as $provider):?>
<?php foreach(User::getSingleUserFromChatBox($employer_token,$provider_token) as $getsender):?>
<div class="container">
  <img src="" alt="Avatar" style="width:100%;">
  <p><?=$provider['message']?></p>
  <span class="time-right"><?=substr($provider['time'],0,5);?></span>
</div>
  <?php endif;?>

<div class="container darker">
  <img src="<?=$image;?>" alt="Avatar" class="right" style="width:100%;">
  <p><?=$getsender['message'];?></p>
  <span class="time-left"><?=substr($getsender['time'],0,5);?></span>
</div>
<?php endforeach;?>
<?php endforeach;?>

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

</body>
</html>
