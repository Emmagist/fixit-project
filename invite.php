<?php 
  require_once "scr/inc/header1.php"; 
  require "process/support.pr.php";
?>

<div class="container-fluid mt-5 invite-container">
  <div class="row mb-5 " id="invite-row">
    <div class="col-md-6 invite-page mt-5" id="invite">
      <h3>Invite a friend</h3>
      <h5>Lorem</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos dicta mollitia fugiat quidem optio esse harum a quasi quam ipsa saepe, sunt eum nam nihil tempore inventore! Ducimus, quis laborum.</p>
      <div class="text-center mt-5">
        <button class="copy-button">Copy url</button>
      </div>
      <div class="medial text-center">
        <h4 class="mb-4">Share via</h4>
        <ul>
          <li class="fa fa-whatsapp fa-3x whatsapp"></li>
          <li class="fa fa-instagram fa-3x instagram"></li>
          <li class="fa fa-facebook fa-3x facebook"></li>
          <li class="fa fa-google fa-3x google"></li>
          <li class="fa fa-linkedin-square fa-3x linkedin"></li>
          <li class="fa fa-twitter-square fa-3x twitter"></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 invite-page mt-5" id="invite-page">
      <h3 class="h3-trust">Trust And Safety</h3>
      <div class="">
        <h5>Lorem</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et facere quia! Quidem nesciunt similique ea eos pariatur natus sed, doloribus nulla dolorem ipsa sunt laboriosam impedit aspernatur, repellendus dicta!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores quas suscipit officia quaerat quibusdam nulla aspernatur eligendi. Ea beatae voluptates molestias nostrum numquam tempore molestiae animi, explicabo dolorum itaque.</p>
      </div>
      <div class="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et facere quia! Quidem nesciunt similique ea eos pariatur natus sed, doloribus nulla dolorem ipsa sunt laboriosam impedit aspernatur, repellendus dicta!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores quas suscipit officia quaerat quibusdam nulla aspernatur eligendi. Ea beatae voluptates molestias nostrum numquam tempore molestiae animi, explicabo dolorum itaque.</p>
      </div>
    </div>
  </div>
  <div class="row invite-row" id="row-two">
    <div class="col-md-6 invite-page mt-5" id="intellectual">
      <h3 class="intel">Intellectual Properties</h3>
      <h5>Lorem</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos dicta mollitia fugiat quidem optio esse harum a quasi quam ipsa saepe, sunt eum nam nihil tempore inventore! Ducimus, quis laborum.</p>
      <div class="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et facere quia! Quidem nesciunt similique ea eos pariatur natus sed, doloribus nulla dolorem ipsa sunt laboriosam impedit aspernatur, repellendus dicta!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores quas suscipit officia quaerat quibusdam nulla aspernatur eligendi. Ea beatae voluptates molestias nostrum numquam tempore molestiae animi, explicabo dolorum itaque.</p>
      </div>
      <div class="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et facere quia! Quidem nesciunt similique ea eos pariatur natus sed, doloribus nulla dolorem ipsa sunt laboriosam impedit aspernatur, repellendus dicta!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores quas suscipit officia quaerat quibusdam nulla aspernatur eligendi. Ea beatae voluptates molestias nostrum numquam tempore molestiae animi, explicabo dolorum itaque.</p>
      </div>
    </div>
    <div class="col-md-6 invite-page mt-5" id="invite-page">
      <h3 class="h3-trust" id="h3-trust">Help and Support</h3>
      <div class="">
        <h5>Lorem</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci et facere quia! Quidem nesciunt similique ea eos pariatur natus sed, doloribus nulla dolorem ipsa sunt laboriosam impedit aspernatur, repellendus dicta!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores quas suscipit officia quaerat quibusdam nulla aspernatur eligendi. Ea beatae voluptates molestias nostrum numquam tempore molestiae animi, explicabo dolorum itaque.</p>
      </div>
      <form action="" id="invit-form" class="mt-5" method="POST">
        <div style="width: 70%;">
        <?php require_once "scr/inc/session-mgs.php";?>
        <?php require_once "scr/inc/messages.php";?>
        </div>
        <div class="form-group mb-4">
          <input type="text" class="form-control mb-5" placeholder="Name" name="name">
          <input type="text" class="form-control mt-4" placeholder="Email Address" name="email">
        </div>
        <button type="submit" name="support_button">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php require_once "scr/inc/footer.php"; ?>