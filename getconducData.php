<?php
include('connect.php');

$CMail=$_POST['CMail'];

$SELECT = "SELECT `PassengerName`,`Source`,`Destination`,`BoardingTime` from `travel data`";
        
        /* Prepare Statement */
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s",$CMail);
  
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