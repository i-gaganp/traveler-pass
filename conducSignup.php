<?php
include("connect.php");
$Cfirstname  = $_POST["CFirstName"];
$Clastname   = $_POST["CLastName"];
$Cemail      = $_POST["CEmail"];
$Cpassword   = sha1($_POST["CPassword"]);
$Caddress    = $_POST["CAddress"];
$Cmobile   = $_POST["CMobileNo"];
$CCity   = $_POST["CCity"];
$CState      = $_POST["CState"];
$CZip        = $_POST["CZip"];
if (!empty ($Cfirstname) || !empty ($Clastname) || !empty ($Cemail) || !empty($Cpassword) || !empty ($Caddress)
|| !empty ($Cmobile) || !empty ($CState) || !empty ($CZip) || !empty ($CCity))
     {
      $SELECT = "SELECT Email from `conductors` where Email = ? Limit 1";
        
      /* Prepare Statement */
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s",$Cemail);

      $stmt->execute();
      $stmt->bind_result($Cemail);
      $stmt->store_result();
      $rnum = $stmt->num_rows; 
      if($rnum==0)
      {
         $stmt->close();

         $INSERT = "INSERT into `conductors` (`FirstName` , `LastName` , `Email` , `Password` , `Address` , `City` , `State` , `Zip` , `Mobile`) values(?,?,?,?,?,?,?,?,?)";
         $stmt1 = $conn->prepare($INSERT);
         $stmt1->bind_param("sssssssss" , $Cfirstname , $Clastname , $Cemail , $Cpassword , $Caddress , $CCity , $CState , $CZip , $Cmobile);
         $stmt1->execute();
         $res=array();
         $res["status"]="1";
         $res["message"]="success";
         echo json_encode($res);

        }
           else
           {
              "Email id already exist";
           }
        error_log($conn->close());
      
       }
       else 
          {
           echo "All fields are required";
           die();
          }
  ?>