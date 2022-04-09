<?php
include 'connect.php';
session_start();
$ADmail      = $_POST["ADmail"];
$ADPass      = $_POST["ADPass"];
if (!empty ($ADmail) || !empty ($ADPass))
   {
    $result=mysqli_query($conn,"SELECT * FROM `admins` WHERE `Admin Mail`='$ADmail' && `Admin Password`='$ADPass'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
      echo "Login success";
      $_SESSION['log']=1;
      $_SESSION['user']=$ADmail;
    
    }
    else
    {
      echo "please fill proper details";
    }
  }
    
?>