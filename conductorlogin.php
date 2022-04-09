<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">

    <title>Conductor login</title>
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
                                    <h3 class="display-7 text-center text-white">Conductor Login</h3>
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Email ID</label>
                                            <input type="email" name="InputCEmail" class="form-control" name="InputCEmail" id="InputCEmail" aria-describedby="emailHelp" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="InputCPassword" id="InputCPassword" placeholder="Enter Password">
                                    </div>
                                        <a href="AdminLogin.php" onclick="adminPop()" class="card-link">New User? Signup</a>
                                    <div>    
                                            <button onclick="conducLogIn()" class="btn btn-orange">Log In</button></div>
                            </div>
                          </div>
                    </div>
    </div>        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/common.js"></script>
    <script src="/traveler/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/traveler/js/popper.js"></script>
    <script src="/traveler/js/bootstrap.min.js"></script>
  </body>
</html>