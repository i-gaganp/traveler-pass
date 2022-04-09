<?php
include('connect.php');

$PassMail=$_POST['PassMail'];

$SELECT = "SELECT PassMail,PassengerName,Source,Destination,PassExp from `passesbought` where PassMail = ?";
        
        /* Prepare Statement */
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s",$PassMail);
  
$stmt->execute();
$result=$stmt->get_result();

$final=array();
while($row=$result->fetch_assoc()){
    array_push($final,$row);
}
$response=array();
// $response['status']="1";
//     $response['data']=$final;
//     $response['message']="success";
//     echo json_encode($response);

if(sizeof($final)>0){
   // $response['status']="1";
    $response['data']=$final;
   // $response['message']="success";
    echo json_encode($response);
}else{
    $response['status']="0";
    $response['message']="failed";
    echo json_encode($response);
}


?>