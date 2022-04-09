<?php
include 'connect.php';
session_start();
$CEmail      = $_POST["InputCEmail"];
$CPassword   = sha1($_POST["InputCPassword"]);
if (!empty ($CEmail) || !empty ($CPassword))
   {
    $result=mysqli_query($conn,"SELECT * FROM `conductors` WHERE `Email`='$CEmail' && `Password`='$CPassword'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
      echo "Login success";
      $_SESSION['log']=1;
      $_SESSION['user']=$CEmail;
    }
    else
    {
      echo "please fill proper details";
    }
  }
?>