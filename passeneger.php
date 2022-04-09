<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">
    <title>Passenger Dashbard</title>
  </head>
  <?php
  session_start();
   //echo $_SESSION['user'];
    echo "<input type='hidden' id='user' value=".$_SESSION['user'].">";
  ?>
  <body onload="passInfo()" style="background-image: url('images/BG.png');">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">
          <img src="/traveler/images/logo2.png" width="85" height="35" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/traveler/passeneger.php">Dashbard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/traveler/newJourney.php">New Journey</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pass Renewal</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/traveler/OwnPass.php">Own Pass</a>
                <a class="dropdown-item" href="/traveler/Other'sPass.php">Other's Pass</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <a class="dropdown-item" href="logout.php">Sign Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container ">
          <div class="container col-lg-3">
              <img src="images/logo2.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                <div class="card text-center text-white" style="width: 18rem;">
                  <div class="card-body">
                    <div  id="passInfo"  class="passInfo">
                      <div class="row">
                         <div class="col-sm-12" id="promail"></div>
                         </div>
                         <div class="row">
                         <div class="col-sm-12" id="proname"></div>
                         </div>
                         <div class="row">
                         <div class="col-sm-12" id="prosrc"></div>
                         </div>
                         <div class="row">
                         <div class="col-sm-12" id="prodes"></div>
                         </div>
                         <div class="row">
                         <div class="col-sm-12" id="PassExp"></div>
                         </div>
                       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/common.js"></script>
    <script src="/traveler/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/traveler/js/popper.js"></script>
    <script src="/traveler/js/bootstrap.min.js"></script>
    <script src="./js/instascan.min.js"></script>
    
  </body>
</html>