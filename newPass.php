<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">

    <title>New Pass</title>
  </head>
  
  <body style="background-image: url('images/BG.png');">
    <div class="container ">
                    <div class="container col-lg-3">
                        <img src="images/logo2.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                        
                          <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                            <h3 class="display-7 text-center text-white">Buy Bus Pass</h3>
                                        <div class="form-group">
                                          <label for="Email">Email (Same as on Pass)</label>
                                          <input type="email" class="form-control" id="PassMail" name="PassMail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                          <label for="CardName">Name (Same As On Card)</label>
                                          <input type="text" class="form-control" id="PassengerName" name="PassengerName" placeholder="Name" required>
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
                                            <input type="number" class="form-control" maxlength="19" id="CardNo" name="CardNo" max="19" placeholder="Card Number" Required oninvalid="this.setCustomValidity('Enter valid card Number')"oninput="this.setCustomValidity('')">
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
                                          <button onclick="passPayment()" class="btn btn-orange">Pay Fee</button>
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