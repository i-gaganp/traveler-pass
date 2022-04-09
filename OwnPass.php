<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">

    <title>Pass Renewal</title>
  </head>
  <?php
    session_start();
    echo "<input type='hidden' id='user' value=".$_SESSION['user'].">";
    ?>
  <body style="background-image: url('images/BG.png');">
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
                
                <a class="dropdown-item" href="/traveler/logout.php">Sign Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container col-lg-3">
        <h3 class="display-7 text-center text-white">Pass Renewal</h3>
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
        <div class="form-group">
                                          <label for="Email">Email (Same as on Pass)</label>
                                          <input type="email" class="form-control" id="oPassMail" name="oPassMail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                          <label for="CardName">Name (Same As On Card)</label>
                                          <input type="text" class="form-control" id="oPassengerName" name="oPassengerName" placeholder="Name" required>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="source">Source</label>
                                            <input type="text" class="form-control" name="Psource" id="Psource" required>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="Pdestination">Destination</label>
                                            <input type="text" class="form-control" name="Pdestination" id="Pdestination" required>
                                            </div>
                                        <div class="form-group col-md-12">
                                            <label for="CardNo">Card Number</label>
                                            <input type="number" class="form-control" id="CardNo" name="CardNo" max="19" placeholder="Card Number" Required oninvalid="this.setCustomValidity('Enter valid card Number')"oninput="this.setCustomValidity('')">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="CarExp">Expiry Date</label>
                                            <input type="month" class="form-control" id="CardExp" name="CardExp" placeholder="Expiry" Required oninvalid="this.setCustomValidity('Enter Card Expiry')"oninput="this.setCustomValidity('')">
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="CVV">CVV</label>
                                            <input type="password" maxlength="3" class="form-control" id="CVV" name="CVV" max="3" placeholder="CVV" Required oninvalid="this.setCustomValidity('Enter CVV')"oninput="this.setCustomValidity('')">
                                          </div>
                                          <p class="text-center text-white">Pass Fee= Rs.300
                                          (Valid Till 3 months from creation.)</p>
                                          <button onclick="OwnPass()" class="btn btn-orange">Pay Fee</button>
                                          </div>
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/common.js"></script>
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>

</body>
</html>