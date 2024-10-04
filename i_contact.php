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
h6 {
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
    width: 150px;
    height: 40px;
    border-radius: 15px;
    margin-top: 20px;
    margin-left: 1150px;
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
          <a href="index.php">Home</a>
          <div class="dropdown">
            <button class="btndrop">Gym <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="i_equipment.php">Equipment</a>
              <a href="i_contact.php" class="active">Contact</a>
            </div>
          </div>
          <a href="i_about.php">About</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <button class="btnLogin" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </div>
    </div>
<!--contact section-->
    <div class="container profile" style="margin-top: 50px;">
        <h4>Contact Us</h4>
        <h6>Baranggay 16, Libis Espina, Caloocan City</h6>
        <h6>libisgym@gmail.com</h6>
        <h6>0950 747 2357</h6>
            <form action="" method="POST" style="text-align: center;">
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
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="process.php">
                  <div class="lform">
                      <label for="email" class="form-label">Email: </label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="lform">
                      <label for="password" class="form-label">Password: </label>
                      <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <button type="submit" class="btnlogin">Login</button>
              </form>
              <button class="btnSignup" data-bs-toggle="modal" data-bs-target="#signupModal">Don't have an account?</button>
          </div>
      </div>
  </div>
</div>

<!--signup section-->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content signup-modal-content" style="margin-top: 60px">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="signupForm" method="POST" action="process.php">
                    <div class="sform">
                        <label for="firstname" class="form-label">Firstname: </label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="sform">
                        <label for="lastname" class="form-label">Lastname: </label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="sform">
                        <label for="contact" class="form-label">Contact No: </label>
                        <input type="text" class="form-control" id="contact" name="phone" required>
                    </div>
                    <div class="sform">
                        <label for="birthdate" class="form-label">Birthdate: </label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="sform">
                        <label for="gender" class="form-label">Gender: </label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option selected disabled>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="sform">
                        <label for="signupEmail" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="signupEmail" name="email" required>
                    </div>
                    <div class="sform">
                        <label for="signupPassword" class="form-label">Password: </label>
                        <input type="password" class="form-control" id="signupPassword" name="password" required>
                    </div>
                    <button type="submit" class="btnsignup">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
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

</body>