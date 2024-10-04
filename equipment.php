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
header {
    text-align: center;
    padding: 20px;
    background: none;
    color: red;
    margin-top: 30px;
    margin-bottom: 30px;
    
}
h5 {
    font-size: 60px;
    font-weight: bolder;
}
.equipment-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    padding: 20px;
}

.equipment-item {
    background-color: yellow;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    width: 200px;
    text-align: center;
    padding: 20px;
}
.equipment-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}
.equipment-item h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    text-align: center;
    margin-top: 10px;
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
              <a href="equipment.php" class="active">Equipment</a>
              <a href="contact.php">Contact</a>
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
    <!--equipment section-->
    <header>
        <h5>Gym Equipment</h5>
    </header>

    <section class="equipment-list">
        <div class="equipment-item">
            <h2>Dumbbell</h2>
            <img src="pic/dumbbell.png">
        </div>
        <div class="equipment-item">
            <h2>Barbell</h2>
            <img src="pic/barbell.png">
        </div>
        <div class="equipment-item">
            <h2>Treadmill</h2>
            <img src="pic/treadmill.png">
        </div>
        <div class="equipment-item">
            <h2>Shoulder Press</h2>
            <img src="pic/shoulder_press.png">
        </div>
        <div class="equipment-item">
            <h2>Stationary Bikes</h2>
            <img src="pic/stationary_bike.png">
        </div>
        <div class="equipment-item">
            <h2>Leg Press Machine</h2>
            <img src="pic/leg_press.png">
        </div>
        <div class="equipment-item">
            <h2>Kettle Bells</h2>
            <img src="pic/kettlebell.png">
        </div>
        <div class="equipment-item">
            <h2>Cable Crossover Machine</h2>
            <img src="pic/cable_crossover.png">
        </div>
        <div class="equipment-item">
            <h2>Plates</h2>
            <img src="pic/plates.png">
        </div>
        <div class="equipment-item">
            <h2>Bench Press</h2>
            <img src="pic/bench_press.png">
        </div>
        <div class="equipment-item">
            <h2>Power Cage</h2>
            <img src="pic/power_cage.png">
        </div>
        <div class="equipment-item">
            <h2>Cable Row Machine</h2>
            <img src="pic/cable_row.png">
        </div>
        <div class="equipment-item">
            <h2>Back Training Machine</h2>
            <img src="pic/back_training.png">
        </div>
        <div class="equipment-item">
            <h2>AB Roller</h2>
            <img src="pic/abroller.png">
        </div>
        <div class="equipment-item">
            <h2>Leg Curl Machine</h2>
            <img src="pic/leg_curl.png">
        </div>
    </section>
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
