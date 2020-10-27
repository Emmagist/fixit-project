<?php 
    require "process/chatbox.pr.php";

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
<?php if(isset($_GET['provider_token'])):?>
   <div class="container">
        <a href="service_prov.php" class="back" style="border-radius:50%;font-weight:bolder;font-size:24px;background:black;cursor:pointer; text-decoration:none"><<</a>
       <div class="row">
           <div class="col-md-4 mt-5">
            <h4 class="text-primary text-center">View Chats</h4>
            <ul class="list-group">
                <?php 
                    
                    foreach(User::getChatByToken($_GET['provider_token']) as $chat):
                        $count = count(User::getChatByToken($_GET['provider_token']))
                ?>
                <li class="list-group-item"><a href="?message=<?=$chat['employer_token'].'&'.'provider_token='.$_GET['provider_token']?>" class="text-primary"><?=$count.' messages from '. $chat['employer_name'];?></a></li>
                <?php endforeach;?>
            </ul>
           </div>
           <!-- <div class="col-md-8 card-body mt-5" id="view-message"> -->
                <!-- <h6></h6> -->
            <div class="chat-wrapper-two col-md-8" >
                <?php if(isset($_GET['message'])):?>
                    <div class="row">
                        <?php foreach(User::getSingleProviderFromChatBox($_GET['provider_token'],$_GET['message']) as $providerchat):?>
                        <?php foreach(User::getEmployerChatByToken($_GET['provider_token'],$_GET['message']) as $getsender):?>
                        <div class="chat-left col-md-4">
                            <div class="row">
                            <div class="col-md-8">
                                <p><?=$getsender['message']?></p>
                            </div>
                            <div class="col-md-2 mt-4">
                                <p><?=substr($getsender['time'],0,5)?></p>
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
                            <p><?=substr($providerchat['time'],0,5);?></p>
                            </div>
                            <div class="col-md-8">
                                <p><?=$providerchat['message'];?></p>
                            </div>
                        </div>
                    </div>
                            <?php endforeach;?>
                        <?php endforeach;?>
                </div>
                    <form action="" class="chat-form" method="POST">
                        <div class="main-chat row">
                        <?php 
                            foreach($user->getSingleServiceProvider($_GET['provider_token']) as $user):
                                $provider_name = $user['user_lastname'];
                            endforeach;
                        ?>

                            <div class="col-md-10">
                                <input type="hidden" class="form-control" name="receiver_token" value="<?php echo $_GET['provider_token'];?>">
                                <input type="hidden" class="form-control" name="sender_token" value="<?php echo $_GET['message']?>">
                                <input type="hidden" class="form-control" name="sender_name" value="<?php echo $provider_name?>">
                                <input type="text" class="form-control" name="message">
                            </div>
                            <div class="col-md-2">
                                <?php require_once "scr/inc/messages.php";?>
                                <button type="submit" class="btn btn-success" name="reply_button">Send</button>
                            </div>
                        </div>
                    </form>
                <?php endif;?>
           </div>
       </div>
   </div>
<?php endif;?>
</body>
</html>