
<?php 
    require "process/chatbox.pr.php";

    foreach($user->getSingleServiceProvider($_GET['message']) as $data){
        $provider_name = $data['user_lastname'];
        $image = $data['profile_image'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Chats</title>
    <link rel="stylesheet" href="scr/css/style_sub_cat.css">
    <link rel="stylesheet" href="scr/css/bootstrap.min.css">
</head>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.contain {
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

.contain::after {
  content: "";
  clear: both;
  display: table;
}

.contain img {
  float: left;
  max-width: 30px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.contain img.right {
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

<body>
<?php if(isset($_GET['employer_token'])):?>
   <div class="container">
        <a href="service_prov.php" class="back" style="border-radius:50%;font-weight:bolder;font-size:24px;background:black;cursor:pointer; text-decoration:none"><<</a>
       <div class="row">
           <div class="col-md-4 mt-5">
            <h4 class="text-primary text-center">View Chats</h4>
            <ul class="list-group">
                <?php 
                    
                    foreach(User::getProviderChatByToken($_GET['employer_token']) as $chat):
                        $count = count(User::getProviderChatByToken($_GET['employer_token']))
                ?>
                <li class="list-group-item"><a href="?message=<?=$chat['provider_token'].'&'.'employer_token='.$_GET['employer_token'];?>" class="text-primary"><?=$count.' messages from '. $chat['employer_name'];?></a></li>
                <?php endforeach;?>
            </ul>
           </div>
           <!-- <div class="col-md-8 card-body mt-5" id="view-message"> -->
                <!-- <h6></h6> -->
            <!-- <div class="chat-wrapper-two col-md-8" >
                
                    <div class="row">
                        
                        <div class="chat-left col-md-4">
                            <div class="row">
                            <div class="col-md-8">
                                <p></p>
                            </div>
                            <div class="col-md-2 mt-4">
                                <p></p>
                            </div>
                            </div>
                        </div>
                        <div class="chat-empty text-white col-md-8 ml-5"></div>
                    </div>
                    <div class="row">
                    
                    <div class="chat-empty col-md-7"></div>
                    <div class="chat-right col-md-4">
                            <div class="row">
                            <div class="col-md-2 mr-4 mt-4">
                            <p></p>
                            </div>
                            <div class="col-md-8">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <form action="" class="chat-form" method="POST">
                        <div class="main-chat row">
                        

                            <div class="col-md-10">
                                <input type="hidden" class="form-control" name="receiver_token" value="">
                                <input type="hidden" class="form-control" name="sender_token" value="">
                                <input type="hidden" class="form-control" name="sender_name" value="">
                                <input type="text" class="form-control" name="message">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success" name="reply_button">Send</button>
                            </div>
                        </div>
                    </form>
                <?php endif;?>
           </div> -->
           <h2>Chat Messages</h2>
        <?php if(isset($_GET['message'])):?>
        <div class="col-md-8">
            <?php foreach(User::getEmployerChatByToken($_GET['provider_token'],$_GET['message']) as $getsender):?>
            <div class="contain" >
            <img src="" alt="Avatar" style="width:100%;">
            <p><?=$getsender['message']?></p>
            <span class="time-right"><?=substr($getsender['time'],0,5);?></span>
            </div>
            <?php endforeach;?>
            <?php foreach(User::getSingleProviderFromChatBox($_GET['provider_token'],$_GET['message']) as $providerchat):?>
            <div class="contain darker">
            <img src="<?=$image?>" alt="Avatar" class="right" style="width:100%;">
            <p><?=$providerchat['message']?></p>
            <span class="time-left"><?=substr($providerchat['time'],0,5);?></span>
            </div>
            <?php endforeach;?>
            <form action="" class="chat-form" method="POST">
                <div class="main-chat row">
                    <div class="col-md-10">
                    <input type="hidden" class="form-control" name="receiver_token" value="<?php echo $_GET['provider_token'];?>">
                    <input type="hidden" class="form-control" name="sender_token" value="<?php echo $_GET['message'];?>">
                    <input type="hidden" class="form-control" name="sender_name" value="<?php echo $provider_name;?>">
                    <input type="text" class="form-control" name="message">
                    </div>
                    <div class="col-md-2">
                    <?php require_once "scr/inc/messages.php";?>
                    <button type="submit" class="btn btn-success" name="reply_button">Send</button>
                    </div>
                </div>
            </form>
        </div>
       </div>
   </div>
<?php endif;?>
</body>
</html>