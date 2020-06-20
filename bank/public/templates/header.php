<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: transparent;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav button:hover {
  background-color: #ddd;
  color: black;
}

/* .topnav button.active {
  background-color: #4CAF50;
  color: white;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
} */

.button {
  background-color: white
  border: none;
  color: black;
  padding: 2px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {font-size: 16px;}
.topnav a.active {
  background-color: #4CAF50;
  color: black;
}

.topnav-right {
  float: right;
}
</style>
<div class="topnav">
<a><img src="images/logo.jpeg" width="50" height="50"></a>
<a>                     </a>
  <a style="color:black" href="../public/index.php">About us</a>
  <a style="color:black" href="#survey">Survey</a>
  <a style="color:black" href="#options">Earning options</a>
  <a style="color:black" href="#expert">Financial Expert</a>
  <a style="color:black" href="#contact">Contact</a>
  <div class="topnav-right">
  <form>
  <button type="submit" class="button button5" font-size="12px"  formaction="../Login/login.php">Login</button>
  
  <button type="submit" class="button button5" formaction="../Login/registration.php">Sign up</button>
  </form>
  </div>
</div>
</head>

