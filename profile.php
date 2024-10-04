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
    margin-top: 100px;
    color: white;
    font-size: 25px;
    text-align: center;
}
h6 {
    margin-top: none;
    color: yellow;
    font-size: 15px;
    text-align: center;
}
.btnPremium {
    margin-top: 10px;
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 100px;
    height: 20px;
    border-radius: 15px;
    font-size: 12px;
    border: 1px solid yellow;
    transition: background-color 0.3s, color 0.3s;
}
.btnpremium {
    margin-top: 10px;
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 100px;
    height: 20px;
    border-radius: 15px;
    font-size: 12px;
    border: 1px solid yellow;
    transition: background-color 0.3s, color 0.3s;
}

.btnpremium:hover {
    background-color: yellow;
    color: red;
}
.btnedit {
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 100px;
    height: 30px;
    font-size: 15px;
    border-radius: 15px;
    margin-top: 10px;
    margin-left: 5px;
}
.btnedit:hover {
    color: red;
    background-color: yellow;
    border-color: red;
}
.btnupdate {
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 100px;
    height: 30px;
    font-size: 15px;
    border-radius: 15px;
    margin-top: 10px;
    margin-left: 10px;
    display: none;
}
.btnupdate:hover {
    color: red;
    background-color: yellow;
    border-color: red;
}
.premium-modal-content {
    margin-top: 100px;
    height: 600px;
    width: 400px;
    background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    left: 0;
}
.premium-modal-content .modal-header{
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: black;
    font-weight: bold;
}
.premium-modal-content .btnPremium {
    background-color: red;
    border-color: yellow;
    color: yellow;
    width: 150px;
    height: 40px;
    border-radius: 15px;
    margin-top: 20px;
    margin-left: 115px;
    font-size: 20px;
}
.premium-modal-content .btnPremium:hover {
    color: red;
    background-color: yellow;
    border-color: red;
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
          <a href="about.php">About</a>
          <a href="profile.php" class="active">Profile</a>
          <a href="index.php" class="btnlogout" style="color: red;">Logout</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
    </div>
    
    <!--profile section-->
    <div class="container profile" style="margin-top: 150px; width: 500px;">
        <form method="POST" action="">
            <h3><?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?></h3>
        <h6>
            <?php
            $userLevel = htmlspecialchars($user['user_level']); 
            if ($userLevel == 2) {
                echo "Non-premium Guest";
                echo '<br>';
                echo '<button type="button" id="btnpremium" class="btnpremium" data-bs-toggle="modal" data-bs-target="#premiumModal">Buy Premium</button>';
                // echo '<button id="btnpremium" class="btnpremium">Buy Premium</button>';
            } elseif ($userLevel == 3) {
                echo "Premium Guest";
            } else {
                echo "Unknown User Level";
            }
            ?>
        </h6>
        <div class="mb-3">
                <label for="birthdate" class="form-label" style="color: white; margin-top: 30px; font-size: 12px;">Birthdate: </label>
                <input type="date" class="form-control" id="birthdate" style="background: none; border-color: white; color: white;" name="birthdate" value="<?php echo htmlspecialchars($user['birthdate']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label" style="color: white; font-size: 12px;">Gender: </label>
                <input type="gender" class="form-control" id="gender" style="background: none; border-color: white; color: white;" name="gender" value="<?php echo htmlspecialchars($user['gender']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label" style="color: white; font-size: 12px;">Phone: </label>
                <input type="text" class="form-control" id="phone" style="background: none; border-color: white; color: white;" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color: white; font-size: 12px;">Email: </label>
                <input type="email" class="form-control" id="email" style="background: none; border-color: white; color: white;" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="pword" class="form-label" style="color: white; font-size: 12px;">Password: </label>
                <input type="password" class="form-control" id="pword" style="background: none; border-color: white; color: white;" name="pword" value="<?php echo htmlspecialchars($user['pword']); ?>" readonly>
            </div>
            <button type="button" class="btnedit" onclick="editProfile()">Edit</button>
            <button type="submit" class="btnupdate">Update</button>
        </form>
    </div>

    <!--Premium Section-->
    <div class="modal fade" id="premiumModal" tabindex="-1" aria-labelledby="premiumModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content premium-modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="premiumModalLabel">Buy Premium Membership</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <h3>1 Month Gym Session</h3>
                    <h3>Planner</h3>
                    <h3>Scheduled database access</h3>
                        <button type="submit" class="btnPremium">Pre-Order</button>
                    </form>
                </div>
            </div>
        </div>
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
    <script>
        function editProfile() {
            // Make the input fields editables
            document.getElementById('phone').readOnly = false;
            document.getElementById('email').readOnly = false;
            document.getElementById('pword').readOnly = false;
        
            // Show the update button and hide the edit button
            document.querySelector('.btnupdate').style.display = 'inline-block';
        }
    </script>
</body>
</html>