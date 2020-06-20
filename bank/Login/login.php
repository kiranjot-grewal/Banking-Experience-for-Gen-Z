<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("../public/images/reg1.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

form.b {
  position: absolute;
  background-color: transparent;
  left: 10;
  margin: auto;
  max-width: 400px;
  padding: 10px;
  width: 60%;
  border: 3px solid
} 

/* Add styles to the form container */
.container {
  margin: auto;
  max-width: 400px;
  padding: 10px;
  background-color: white;
  width: 60%;
  border: 1px solid 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
  
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 50%; 
  min-height: 100%;
}
.content {
  position: fixed;
  bottom: 60;
  /* background: rgba(0, 0, 0, 0.5); */
  color: black;
  width: 100%;
  padding: 20px;
}

</style>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="../public/images/reg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../public/lindex.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?><br>
<div class="content">
    <form class="b" method="post" name="login" onsubmit="return validateform()">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <input type="submit" value="Login" name="submit"  class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
        <!-- <button id="myBtn" onclick="myFunction()">Pause</button> -->
  </form>
  </div>
<?php
    }
?>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</body>
</html>
