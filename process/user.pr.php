<?php
require_once "../controllers/init.php";
$id = 46;
$email = 'newCustomertwo.com';
$firstname = 'SegunSeun Ola';
$password = 123456;
//GET ALL USER
$data_rlt = $user->getAllUser();
//$data_rlt  = $user->getSingleUser($id);
//$update = $user->UpdateUser($id,$email,$firstname);
//$user->DeleteUser($id);
//$data_rlt  = $user->getSingleUser($id);
//$user->InsertUser($email,$firstname,$password);
$fun->arrayPrinter($data_rlt);
foreach($data_rlt  as $data){
  //$fun->arrayPrinter($data);
  echo $data['firstname'] . '<br>';
  echo $data['email'] . '<br>';
  // echo $data->firstname . '<br>';
}
