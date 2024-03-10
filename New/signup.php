<?php
    if (isset($_POST['submit'])) {
      include"connection.php";
        $username = mysqli_real_escape_string($conn,$_POST['user']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password =mysqli_real_escape_string( $conn,$_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['cpass']);

        $sql = "select * from user where username = '$username'";
        $result = mysqli_query($conn, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count_user = mysqli_num_rows($result);

        $sql = "select * from user where username = '$email'";
        $result = mysqli_query($conn, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count_email = mysqli_num_rows($result);  
        
        if($count_user == 0||$count_email==0){
          if($password==$cpassword){
            $hash=password_hash($password, PASSWORD_DEFAULT);
            $sql="insert into user(username,email,password) values('$username','$email','$hash')";
            $result= mysqli_query($conn, $sql);
          }
          else{
                echo '<script>
                alert("Password Doesnot Match!!");
                window.location.href = "signup.php";
                </script>';
          }
          }
        else{
          echo '<script>
            alert("Login failed. User Already Exist!!");
            window.location.href = "http://localhost/FinalyearProjecct/index.html";
            </script>';
        }
    }
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
        <form name="form" action="signup.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user" require>
                <label>Email </label>
                <input type="text" id="email" name="email" require></br>
                <label>Password </label>
                <input type="password" id="pass" name="pass" require></br>
                <label> CPassword </label>
                <input type="password" id="cpass" name="cpass" require></br>
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                <div class="link">
                <input type="submit" id="btn" value="Signup" action="" name = "submit"/>
                  <a href="#" class="forgot">Forgot password?</a>
                  <a href="#" class="forgot">Already Sign up</a>
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