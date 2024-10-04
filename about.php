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
    font-size: 60px;
    font-weight: bolder;
    color: red;
    text-align: center;
    margin-top: 100px;
    margin-bottom: 30px;
}
h6 {
    font-size: 20px;
    color: white;
    text-align: center;
    margin-bottom: 20px;
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
              <a href="contact.php">Contact</a>
            </div>
          </div>
          <a href="about.php" class="active">About</a>
          <a href="profile.php">Profile</a>
          <a href="index.php" class="btnlogout" style="color: red;">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
    </div>
    <!--about section-->
    <div class="container about" style="margin-top: 50px;">
        <h4>About Us</h4>
        <h6>The founding of Libis Gym, which Marty Estanislao established in the Libis neighborhood in 2017. Marty, initially a gymgoer with a passion for fitness, became a fitness coach and eventually opened his own gym. His goal was to create a welcoming space for fitness enthusiasts, naming it after the location. Marty's journey from client to coach to gym owner reflects his commitment to health and fitness, inspiring his clients and the local fitness community.</h6>
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
