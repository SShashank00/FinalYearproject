<?php
        include("connection.php");
        include("login.php");
        // include("signup.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantCare Login Page </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body> 
    <div class="container flex">
      <div class="account-page flex">
        <div class="text">
          <img
                      alt="image"
                      src="D:\FinalyearProjecct\public\Icons\icc.png" 
                      height="100"
                      max-width: 100%;
                    />
          <h1><a>PlantCare</a></h1>
          <p>Connect with fellow plant enthusiasts and</p>
          <p>exchange gardening tipsfor plants in<br> this vibrant community..🌱</p>
        </div>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
            <div class="link">
            <input type="submit" id="btn" value="Login" action="D:\FinalyearProjecct\index.html" name = "submit"/>
            <a href="#" class="forgot">Forgot password?</a>
            <a href="#" class="forgot">Create new account</a>
          </div>
          <hr>
          <div class="button">
            <a href="D:\FinalyearProjecct\index.html">Back</a>
          </div>
        </form>
      </div>
    </div>
    <!-- <script src="\port.js"> </script> -->
    <script>
      var modal = document.getElementById('id01');
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
  </body>
</html>