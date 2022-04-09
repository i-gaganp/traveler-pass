<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">

    <title>Admin login</title>
  </head>
  <?php
    session_start();
    echo "<input type='hidden' id='user' value=".$_SESSION['user'].">";
    ?>
  <body style="background-image: url('images/BG.png');">
    <div class="container ">
                    <div class="container col-lg-3">
                        <img src="images/logo2.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                          <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                    <div class="form-group">
                                    <h3 class="display-7 text-center text-white">Admin Login</h3>
                                            <label for="exampleInputEmail1">Email ID</label>
                                            <input type="email" class="form-control" id="ADmail" name="ADmail" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="ADPass" name="ADPass" placeholder="Enter Password">
                                    </div>
                                    <button onclick="ADLogin()" id="ADloginb" class="btn btn-orange">Log in</button>
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