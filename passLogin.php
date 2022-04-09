<?php
include 'connect.php';
session_start();
$PLmail      = $_POST["PLmail"];
$PLPass   = sha1($_POST["PLPass"]);
if (!empty ($PLmail) || !empty ($PLPass))
   {
    $result=mysqli_query($conn,"SELECT * FROM `passengers` WHERE `Email`='$PLmail' && `Password`='$PLPass'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
      echo "Login success";
      $_SESSION['log']=1;
      $_SESSION['user']=$PLmail;
    
    }
    else
    {
      echo "please fill proper details";
    }
  }
    
?>