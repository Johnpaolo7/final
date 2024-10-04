<?php
session_start(); // Start the session

// Assuming the user ID is stored in the session when they log in
if (!isset($_SESSION['id'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit();
}

// Store the logged-in user's ID
$user_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libis GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <a href="guest.php">Home</a>
            <div class="dropdown">
                <button class="btndrop">Book <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="book.php">Book Now</a>
                    <a href="history.php" class="active">Book History</a>
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

    <!-- Booking History Section -->
    <div class="container history" style="margin-top: 50px;">
        <h2 style="color: red;">Booking History</h2>
        <table class="table table-bordered" style="border: black; background-color: white;">
            <thead style="color: black;">
                <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // SQL query to fetch booking history
                $sql = "SELECT book_id, fullname, phone, email, btime, remarks, book_stats FROM tbl_book";
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["fullname"] . "</td>
                                <td>" . $row["phone"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["date"] . "</td>
                                <td>" . $row["time"] . "</td>
                                <td>" . $row["book_stats"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>No bookings found</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </tbody>
        </table>
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
