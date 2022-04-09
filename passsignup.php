<?php
include("connect.php");

$Firstname  = $_POST["firstName"];
$Lastname   = $_POST["lastname"];
$Email      = $_POST["email"];
$Password   = sha1($_POST["password"]);
$Address    = $_POST["address"];
$Mobileno   = $_POST["mobile"];
$Pcity      = $_POST["city"];
$State      = $_POST["state"];
$Zip        = $_POST["zip"];
if (!empty ($Firstname) || !empty ($Lastname) || !empty ($Email) || !empty($Password) || !empty ($Address)
|| !empty ($Mobileno) || !empty ($State) || !empty ($Zip) || !empty ($Pcity))
     {
        $SELECT = "SELECT Email from `passengers` where Email = ? Limit 1";
        
        /* Prepare Statement */
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$Email);
  
        $stmt->execute();
        $stmt->bind_result($Email);
        $stmt->store_result();
        $rnum = $stmt->num_rows; 
        if($rnum==0)
        {
           $stmt->close();

           $INSERT = "INSERT into `passengers` (`Firstname` , `Lastname` , `Email` , `Password` , `Address` , `MobileNo` , `City`, `State` , `Zip`) values(?,?,?,?,?,?,?,?,?)";
           $stmt1 = $conn->prepare($INSERT);
           $stmt1->bind_param("sssssssss" , $Firstname , $Lastname , $Email , $Password , $Address , $Mobileno, $Pcity, $State , $Zip);
           $stmt1->execute();
           $res=array();
           $res["status"]="1";
           $res["message"]="success";
           echo json_encode($res);
        }
           else
           {
             echo "Email id already exist";
           }
        error_log($conn->close());
      
       }
       else 
          {
           echo "All fields are required";
           die();
          }
  ?>