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
                      src="icc.png" 
                      height="100"
                      max-width: 100%;
                    />
          <h1><a>PlantCare</a></h1>
          <p>Connect with fellow plant enthusiasts and</p>
          <p>exchange gardening tipsfor plants in<br> this vibrant community..🌱</p>
        </div>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label>Username: </label>
                <input type="text" id="user" name="user" require></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" require></br>
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            <script>
              const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
            </script>
                <div class="link">
            <input type="submit" id="btn" value="Login" action="http://localhost/FinalyearProjecct/index2.html" name = "submit"/>
            <a href="#" class="forgot">Forgot password?</a>
            <a href="#" class="forgot">Create new account</a>
          </div>
          <hr>
          <div class="button">
            <a href="http://localhost/FinalyearProjecct/index.html">Back</a>
          </div>
        </form>
      </div>
    </div>
    <!-- <script src="\port.js"> </script> -->
    <script>
      var modal = document.getElementById('btn');
      window.onclick = function(event) {
        if (event.target == modal) {
          window.location.href = "inde.php";
          alert("Login Succesful," Welcome ${user})
        }
      }
    </script>
  </body>
</html>