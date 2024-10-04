<?php
require_once 'config.php'; // Include the database connection

session_start();

if (!isset($_SESSION['restrictLogin'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$stmt = $pdo->prepare("SELECT firstname, lastname, phone, email, birthdate, gender, pword, user_level FROM tbl_user WHERE id = ?");
$stmt->execute([$_SESSION['id']]);
$user = $stmt->fetch();
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
h3 {
    color: red;
    font-size: 40px;
}
h6 {
    color: yellow;
    font-size: 20px;
}
h4 {
    color: white;
    font-size: 12px;
    margin-left: 20px;
    margin-top: 10px;
}
.btnbook {
    background-color: red;
    border-color: yellow;
    color: yellow;
    font-size: 15px;
    width: 100px;
    height: 30px;
    border-radius: 15px;
    margin-top: 10px;
    margin-left: 630px;
}
.btnbook:hover {
    color: red;
    background-color: yellow;
    border-color: red;
}
#time {
    background-color: black; 
    border-color: white;
    color: white;
}
#time option {
    background-color: black; 
    color: white;
}
#time option:checked {
    background: rgba(255, 255, 255, 0.1);
}
#time option[disabled] {
    color: black;
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
                <a href="book.php" class="active">Book Now</a>
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
          <a href="about.php">About</a>
          <a href="profile.php">Profile</a>
          <a href="index.php" class="btnlogout" style="color: red;">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
    </div>
    <!--book now section-->
    <div class="container book" style="border-radius: 10px; border: solid white; margin-top: 150px; height: 550px; width: 800px; padding-top: 30px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px;">
        <form method="POST" action="process.php">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h3 style="margin: 0;"><?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?></h3>
                <h6 style="margin: 0;">
                    <?php
                    $userLevel = htmlspecialchars($user['user_level']); 
                    if ($userLevel == 2) {
                        echo "Non-premium Guest";
                    } elseif ($userLevel == 3) {
                        echo "Premium Guest";
                    } else {
                        echo "Unknown User Level";
                    }
                    ?>
                </h6>
            </div>
            <h4><?php echo htmlspecialchars($user['email']); ?></h4>
            <h4><?php echo htmlspecialchars($user['phone']); ?></h4>
        <div class="mb-3">
                <label for="date" class="form-label" style="color: white; margin-top: 30px; font-size: 12px;">Date: </label>
                <input type="date" class="form-control" id="date" name="date" style="background: none; border-color: white; color: white;" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label" style="margin-top: 20px; color: white; font-size: 12px;">Time: </label>
                    <div class="col-sm-8">
                        <select class="form-select custom-select" id="time" name="time" style="background: transparent; border-color: white; color: white; width: 730px;" required>
                            <option selected disabled>Select a time slot</option>
                            <option value="08:00">8:00 AM</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="01:00">1:00 PM</option>
                            <option value="02:00">2:00 PM</option>
                            <option value="03:00">3:00 PM</option>
                            <option value="04:00">4:00 PM</option>
                            <option value="05:00">5:00 PM</option>
                            <option value="06:00">6:00 PM</option>
                            <option value="07:00">7:00 PM</option>
                            <option value="08:00">8:00 PM</option>
                        </select>
                    </div>
            </div>
                <div class="mb-3">
                    <label for="remarks" class="form-label" style="margin-top: 20px; color: white; font-size: 12px;">Remarks: </label>
                    <textarea id="remarks" name="remarks" rows="3" style="color: white; border-color: white; border-radius: 7px; background: none; width: 100%; max-width: 1300px; display: flex;"></textarea>
                </div>
                <button type="submit" class="btnbook">Submit</button>
            </form>
    </div>
    <!--footer section-->
    <footer>
        <p>Privacy Policy | Terms and Conditions</p>
    </footer>
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
</html>