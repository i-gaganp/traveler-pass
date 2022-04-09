<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="\traveler\css\bootstrap.css">

    <title>Conductor SignUp</title>
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
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="CFirstName">First Name</label>
                                                <input type="text" class="form-control" id="CFirstName" placeholder="First Name" name="CFirstName">
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label for="CLastName">Last Name</label>
                                                  <input type="text" class="form-control" id="CLastName" placeholder="Last Name" name="CLastName">
                                                </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputCEmail">Email</label>
                                            <input type="email" class="form-control" id="CEmail" placeholder="Email ID" name="CEmail">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputCPassword">Password</label>
                                            <input type="password" class="form-control" id="CPassword" placeholder="Password" name="CPassword">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputCAddress">Address</label>
                                          <input type="text" class="form-control" id="CAddress" placeholder="1234 Main St" name="CAddress">
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCCity">City</label>
                                            <input type="text" class="form-control" id="CCity" placeholder="Mumbai" name="CCity">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="CMobileNo">Mobile No.</label>
                                            <input type="tel" class="form-control" id="CMobileNo" name="CMobileNo" pattern="[0-9]{10}"Required oninvalid="this.setCustomValidity('Enter 10 digit mobile no')"oninput="this.setCustomValidity('')">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="CState">State</label>
                                            <select id="CState" class="form-control" name="CState">
                                              <option selected>Choose...</option>
                                                    <option>Andhra Pradesh</option>	
                                                    <option>Arunachal Pradesh</option>
                                                    <option>Assam</option>	
                                                    <option>Bihar</option>	
                                                    <option>Chhattisgarh</option>
                                                    <option>Chandigarh</option>
                                                    <option>Delhi</option>
                                                    <option>Goa</option>	
                                                    <option>Gujarat</option>	
                                                    <option>Haryana</option>
                                                    <option>Himachal Pradesh</option>
                                                    <option>Jammu and Kashmir</option>
                                                    <option>Jharkhand</option>
                                                    <option>Karnataka</option>
                                                    <option>Kerala</option>
                                                    <option>Madhya Pradesh</option>
                                                    <option>Maharashtra</option>
                                                    <option>Manipur</option>
                                                    <option>Meghalaya</option>
                                                    <option>Mizoram</option>
                                                    <option>Nagaland</option>
                                                    <option>Odisha</option>
                                                    <option>Punjab</option>
                                                    <option>Rajasthan</option>
                                                    <option>Sikkim</option>
                                                    <option>Tamil Nadu</option>
                                                    <option>Telangana</option>
                                                    <option>Tripura</option>
                                                    <option>Uttar Pradesh</option>
                                                    <option>Uttarakhand</option>
                                                    <option>West Bengal</option>
                                                    <option>Andaman and Nicobar</option>
                                                    <option>Dadar and Nagar Haveli</option>
                                                    <option>Daman and Diu</option>
                                                    <option>Lakshadweep</option>
                                                    <option>Puducherry</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="CZip">Zip</label>
                                            <input type="number" class="form-control" id="CZip" name="CZip">
                                          </div>
                                        </div>
                                        <button onclick="conductorSignUp()" name="signUP" class="btn btn-orange">Sign Up</button>
    </div>        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/common.js"></script>
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>