<?php
include("connect.php");

$PassMail  = $_POST["PassMail"];
$PassengerName   = $_POST["PassengerName"];
$Psrc        = $_POST["Psource"];
$Pdes        = $_POST["Pdestination"];
$CardNo      =($_POST["CardNo"]);
if (!empty ($PassMail) || !empty ($PassengerName) || !empty ($Psrc) || !empty ($Pdes) || !empty ($CardNo))
     {
      $result=mysqli_query($conn,"SELECT Email FROM `passengers` WHERE `Email`='$PassMail'");
      $count=mysqli_num_rows($result);
        if($count==1)
        {
           $INSERT = "INSERT into `passesbought` (`PassMail` , `PassengerName` , `Source` , `Destination` , `CardNo` , `PassExp`) values(?,?,?,?,?,NOW()+ INTERVAL 3 MONTH)";
           $stmt1 = $conn->prepare($INSERT);
           $stmt1->bind_param("sssss" , $PassMail , $PassengerName , $Psrc , $Pdes , $CardNo);
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