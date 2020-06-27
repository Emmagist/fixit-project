<?php

if (isset($_SESSION['message-success'])) {
  echo "<li class='text-center alert alert-success' role='alert' style='list-style: none;'>".$_SESSION['message-success']."</li>"; 
  unset($_SESSION['message-success']);
}

if (isset($_SESSION['message-danger'])) {
  echo "<li class='text-center alert alert-danger' role='alert' style='list-style: none;'>".$_SESSION['message-danger']."</li>"; 
  unset($_SESSION['message-danger']);
}

if (isset($_SESSION['message-info'])) {
  echo "<li class='text-center alert alert-info' role='alert' style='list-style: none;'>".$_SESSION['message-info']."</li>"; 
  unset($_SESSION['message-info']);

}

if (isset($_SESSION['message-warning'])) {
  echo "<li class='text-center alert alert--warning' role='alert' style='list-style: none;'>".$_SESSION['message-warning']."</li>"; 
  unset($_SESSION['message-warning']);
}