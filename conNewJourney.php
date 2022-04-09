<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/traveler/css/bootstrap.css">
    <script src="./js/common.js"></script>
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/webcam.min.js"></script>
    <script src="./js/instascan.min.js"></script>

    <title>New Journey</title>
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
            
              <a class="nav-link" href="/traveler/conNewJourney.php">New Journey</a>
            </li>
            
            
              <a class="nav-link" href="logout.php">SignOut</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container col-lg-3">
            <h3 class="display-5 text-center text-white">Scan QR Code</h3>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body" >
            <video  id="preview" style="width:94%"><video>
            <script type="text/javascript">
            Webcam.set({
                    width: 10,
                    height: 10,
                    image_format: "jpeg",
                    jpeg_quality: 90,
                    force_flash: false,
                    flip_horiz: true,
                    fps: 60
                });

        Webcam.set("constraints", {
            optional: [{ minWidth: 80 }]
        });
              let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
              scanner.addListener('scan', function (content) {
                var obj= (content);
                var gg=JSON.parse(obj);
                console.log(gg.data);
                var temp=gg.data;
                insertJourney(temp[0]);
                alert(JSON.stringify(temp));
          
                
              });
              Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                  scanner.start(cameras[0]);
                } else {
                  console.error('No cameras found.');
                }
              }).catch(function (e) {
                console.error(e);
              });
              function insertJourney(temp){
                var passInfo=$('#user').val();
                var Cmail=$('#user').val();

                    $.ajax({
                        type: "POST",
                        url: "pnewJourney.php",
                        data: temp,
                        success: function(dataString){
                            console.log(dataString);}
                        })
                      }
            </script>
                

    </body>
</html>    