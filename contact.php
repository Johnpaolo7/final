<?php
  // TO CONNECT ON DATABASE
  require_once('config.php'); 
  // START SESSION
  if(!isset($_SESSION)) 
  { 
    session_start(); 
  } 
  // CHECK IF THE ['restrictLogin'] 0 OR 1. IF 1 THE SESSION IS LOGGEDIN AND 0 IF THE USER LOGOUT
  $_SESSION['restrictLogin']=0;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Libis GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
<style>
h4 {
    font-size: 50px;
    font-weight: bold;
    color: red;
    text-align: center;
    margin-top: 50px;
    margin-bottom: 30px;
}
h5 {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}
.cform{
    align-content: center;
}
.btnsend {
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 100%;
    max-width: 150px;
    height: 40px;
    border-radius: 15px;
    margin-top: 20px;
    margin-left: 1150px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    text-align: center;
}
.btnsend:hover {
    color: red;
    background-color: yellow;
    border-color: red;
}
@media (max-width: 768px) {
      #message {
          margin-top: 20px;
          width: 90%;
      }
  }
@media (max-width: 1024px) {
      #message {
          margin-top: 30px;
          width: 95%;
      }
  }
@media (max-width: 768px) {
    .btnsend {
        width: 80%;
        max-width: none;
        height: 35px;
        margin-left: auto;
        margin-right: auto;
    }
}
@media (max-width: 480px) {
    .btnsend {
        width: 90%;
        height: 35px;
    }
}
</style>
</head>
<body>
    <!--header section-->
    <div class="header">
        <div class="logo-container">
          <img src="pic/logo.png" alt="Logo" width="60px" height="50px" margin-left="50px">
          <span class="text">LIBIS GYM</span>
        </div>
        <div class="nav" id="Nav">
          <a href="guest.php">Home</a>
          <div class="dropdown">
            <button class="btndrop">Book <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="book.php">Book Now</a>
                <a href="history.php">Book History</a>
            </div>
        </div>
          <div class="dropdown">
            <button class="btndrop">Gym <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="equipment.php">Equipment</a>
              <a href="contact.php" class="active">Contact</a>
            </div>
          </div>
          <a href="about.php">About</a>
          <a href="profile.php">Profile</a>
          <a href="index.php" class="btnlogout" style="color: red;">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
    </div>
    
    <!--contact section-->
    <div class="container profile" style="margin-top: 50px;">
        <h4>Contact Us</h4>
        <h5>Baranggay 16, Libis Espina, Caloocan City</h5>
        <h5>libisgym@gmail.com</h5>
        <h5>0950 747 2357</h5>
            <form action="process.php" method="POST" style="text-align: center;">
            <div class="mb-3">
                <input type="text" class="form-control" style="margin-top: 50px" id="name" name="name" placeholder="Enter Your Name..." required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" style="margin-top: 50px" id="email" name="email" placeholder="Enter Your Email..." required>
            </div>
            <div class="mb-3">
                <textarea id="message" name="message" rows="5" style="border-radius: 7px; margin-top: 50px; width: 100%; max-width: 1300px; display: flex;" placeholder="Enter Your Message..." required></textarea>
            </div>
                <button type="submit" class="btnsend">Send Message</button>
            </form>
    </div>
    <!--footer section-->
    <footer>
        <p>Privacy Policy | Terms and Conditions</p>
      </footer>
    <!--login section-->

    <script>
        function myFunction() {
            var x = document.getElementById("Nav");
            if (x.className === "nav") {
            x.className += " responsive";
            } else {
            x.className = "nav";
            }
        }
    </script>
