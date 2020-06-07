<!DOCTYPE html>
<html lang="en">
<?php require_once "scr/inc/header2.php"; ?>
  <main class='main'>
    <div class="container text-center" id="first-div">
      <div class="row" >
        <div class="col-md-8">
          <div class="pic-area">
            <img src="scr/img/2.jpg" alt="profile-picute">
            <div class="mt-5">
              <p style="margin-bottom: -5%;"> Salami John </p>
              <a href="#">Top Rated Seller</a>
              <i class="fa fa-star" id="star-icon">
                <i class="fa fa-star">
                <i class="fa fa-star">
                <i class="fa fa-star">
                <i class="fa fa-star"><span class="text-dark">(1k+)</span></i>
                </i>
                </i>
                </i>
              </i>
            </div>  
          </div>
          <div>
          <button class="btn btn-outline-secondary btnpic mt-3" id="profilebtnupdt1">Change Profile Picture</button>
            <button class="btn  btnpic" id="profilebtnupdt2">Upgrade To Pro</button>  
          </div>
          
        </div>
        <div class="col-md-04">
          <div class="verified"> <h4 class="text-center">VERIFIED</h4></div>
        </div>
      </div>
    </div>
  </main>
  
  <main class="second-main">
    <h5>About Seller</h5>
    <div class="container" id="second-div">
      
      <div class="row" id="second-divch2">
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">FROM</h6>
          <p>Lagos</p>
        </div>
        <div class="col-4 mt-2" style='border-right: 1px solid rgb(226, 225, 225);'>
          <h6 class="detail text-muted">MEMEBER SINCE</h6>
          <p>July 2012</p>
        </div>
        <div class="col-4 mt-2">
          <h6 class="detail text-muted">AVG RESPONSE TIME</h6>
          <p> 15 minute</p>
        </div>
      </div>
      <div class="mt-2">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis aut molestiae, suscipit recusandae aspernatur quidem mollitia voluptates id, blanditiis sapiente eaque consequuntur quia iure! Temporibus neque itaque aliquid facere.
        </p>
      </div>
  </main>

  <main class="main" id="third-main">
  <div class="container">
        <button class="btn btn-outline-secondary " id="profileeditbtn" type="submit">Edit About</button>
        <div class="mt-5">
          <h5>CURRENT SKILLS</h5>
          <ul class="list-group">
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
               Graphics designer</li>
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
              Logo designer</li>
            <li lass="list-item">
            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
              web developer</li>
          </ul>
          <button class="btn btn-outline-secondary mt-5" id="profileeditbtn" type="submit">Edit Skill</button>
          <button class="btn btn-outline-secondary mt-4" id="profileeditaddressbtn" type="submit">Edit Address</button>
        </div>
    </div>
  </main>
  

   
  <?php require_once "scr/inc/footer.php"; ?>