<?php 
    require "process/chatbox.pr.php";
    $provider_token = $_GET['provider_token'];
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
<body>
   <div class="container-fluid">
        <a href="service_prov.php" class="back" style="border-radius:50%;font-weight:bolder;font-size:24px;background:black;cursor:pointer; text-decoration:none"><<</a>
       <div class="row">
           <div class="col-md-5 mt-5">
            <h4 class="text-primary text-center">View Chats</h4>
            <ul class="list-group">
                <?php 
                    
                    foreach(User::getChatByToken($provider_token) as $chat):
                        $count = count(User::getChatByToken($provider_token))
                ?>
                <li class="list-group-item"><a href="#view-message?message=<?=$chat['employer-token'];?>" class="text-primary"><?=$count.' messages from '. $chat['employer_name'];?></a></li>
                <?php endforeach;?>
            </ul>
           </div>
           <!-- <div class="col-md-8 card-body mt-5" id="view-message"> -->
                <!-- <h6></h6> -->
            <div class="chat-wrapper-two col-md-7" >
                <div class="row">
                    <?php //foreach(User::getSingleUserFromChatBox($employer_token) as $getsender):?>
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
                    <div class="chat-empty text-white col-md-8 ml-5"></div>
                    <?php //endforeach;?>
                </div>
                <div class="row">
                    <?php foreach(User::getChatByToken($provider_token) as $providerchat):?>
                        <div class="chat-empty col-md-7"></div>
                        <div class="chat-right col-md-4">
                            <div class="row">
                            <div class="col-md-2 mr-4 mt-4">
                            <p><?=substr($providerchat['time'],0,5);?></p>
                            </div>
                            <div class="col-md-8">
                                <p><?=$providerchat['message'];?></p>
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
       </div>
   </div>
</body>
</html>