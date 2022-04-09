<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">

    <title>Passenger login</title>
  </head>
  <?php
  session_start();
  ?>
  <body style="background-image: url('images/BG.png');">
    <div class="container ">
                    <div class="container col-lg-3">
                        <img src="images/logo2.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                          <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                    <div class="form-group">
                                    <h3 class="display-7 text-center text-white">Passenger Login</h3>
                                            <label for="exampleInputEmail1">Email ID</label>
                                            <input type="email" class="form-control" id="PLmail" name="PLmail" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="PLPass" name="PLPass" placeholder="Enter Password">
                                    </div>
                                    <div>
                                      <a href="PassenegerSignup.php" class="card-link">New User? Signup</a>
                                    </div>
                                    <button onclick="pLogin()" id="loginb" class="btn btn-orange">Log in</button>
                            </div>
                          </div>
                    </div>      
    </div>        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/common.js"></script>
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>