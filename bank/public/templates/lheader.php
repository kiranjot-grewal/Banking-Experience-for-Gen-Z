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
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 50%; 
  min-height: 100%;
}
.topnav button:hover {
  background-color: #ddd;
  color: black;
}
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

.topnav button.active {
  background-color: #4CAF50;
  color: white;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
p.double {border-style: double;}
.center {
  margin: auto;
  width: 85%;
  /* border: 3px solid #73AD21; */
  padding: 10px;
  font-size: large;

  
}
div.c {
  font-size: 150%;
}
p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;

}
.home {
    background-image: url('images/home7.jpg');
    background-repeat: no-repeat;
    background-size: 15% 110%;
    background-position:  right top;
}

.bg-img {
  /* The image used */
  background-image: url("images/welcome.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

