<?php
include("connect.php");

$PassMail  = $_POST["PassMail"];
$PassengerName   = $_POST["PassengerName"];
$Psrc        = $_POST["Source"];
$Pdes        = $_POST["Destination"];
if (!empty ($PassMail) || !empty ($PassengerName) || !empty ($Psrc) || !empty ($Pdes))
     {
      $result=mysqli_query($conn,"SELECT PassMail FROM `passesbought` WHERE `PassMail`='$PassMail'");
      $count=mysqli_num_rows($result);
        if($count==1)
        {
           $INSERT = "INSERT into `travel data` (`PassMail` , `PassengerName` , `Source` , `Destination` , `BoardingTime`) values(?,?,?,?,NOW())";
           $stmt1 = $conn->prepare($INSERT);
           $stmt1->bind_param("ssss" , $PassMail , $PassengerName , $Psrc , $Pdes);
           $stmt1->execute();
           $res=array();
           $res["status"]="1";
           $res["message"]="success";
           echo json_encode($res);
        }
           else
           {
             echo "Email id does not exist";
           }
        error_log($conn->close());
      
       }
       else 
          {
           echo "All fields are required";
           die();
          }
  ?>