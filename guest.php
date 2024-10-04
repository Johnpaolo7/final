<?php
// Assuming you have a session started and user level stored in session
session_start();

// Example: Fetch user level from the session (after login)
// $_SESSION['user_level'] should be set during the login process
$user_level = isset($_SESSION['user_level']) ? $_SESSION['user_level'] : 0; // Default to 0 if not set
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
</head>
<body>
    <!--header section-->
    <div class="header">
        <div class="logo-container">
            <img src="pic/logo.png" alt="Logo" width="60px" height="50px">
            <span class="text">LIBIS GYM</span>
        </div>
        <div class="nav" id="Nav">
            <a href="guest.php" class="active">Home</a>
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
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <a href="guest/about.php">About</a>
            <a href="profile.php">Profile</a>
            <a href="index.php" class="btnlogout" style="color: red;">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    
    <!--home section-->
    <div class="home">
        <div class="home-content">
            <h1 data-text="Libis GYM">Libis GYM</h1>
            <p>Libis Gym is dedicated to providing top-notch fitness <br>training for all levels. Whether you’re a beginner or an <br>athlete, we have the right program for you!</p>            
            <button class="btnappoint" onclick="window.location.href='book.php'">Appoint Now!</button>
        </div>
        <div class="home-logo">
            <img src="pic/logo.png" alt="home-logo" width="450px" height="450px">
        </div>
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
