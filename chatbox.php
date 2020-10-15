<?php
  if (isset($_GET['id']) || ($_GET['user_token']) {
    $id = $_GET['id'];
    // echo $id;exit;
    // $token = $_GET['user_token'];
    // echo $token;exit;
  }
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
    <div class="chat-empty col-md-7"></div>
    <div class="chat-right col-md-4">
      <div class="row">
        <div class="col-md-2 mr-4 mt-4">
        <p>16:17</p>
        </div>
        <div class="col-md-8">
          <p>rtertdtrfyrtfryt</p>
        </div>
      </div>
    </div>
    </div>
    <form action="" class="chat-form" method="POST">
      <div class="main-chat row">
          <div class="col-md-10">
            <input type="hidden" class="form-control" name="user-id" value="">
            <input type="hidden" class="form-control" name="user-token" value="">
            <input type="hidden" class="form-control" name="user-token" value="">
            <input type="text" class="form-control" name="message">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-success" name="chatbox_button">Send</button>
          </div>
      </div>
    </form>
  </div>
</body>
</html>