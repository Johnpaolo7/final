<?php
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "libisgym_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select bookings
$sql = "SELECT * FROM tbl_book";
$result = $conn->query($sql);

$bookings = [];
if ($result->num_rows > 0) {
    // Fetch all bookings
    while($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

$conn->close();
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
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: yellow;
  position: fixed;
  height: 100%;
  overflow: auto;
  border-top: solid 1px black;;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  border: solid 1px black;
  border-left: none;
  border-right: none;
  border-top: none;
  text-align: center;
  font-size: 18px;
}
 
.sidebar a.active {
  color: Red;
}

.sidebar a:hover:not(.active) {
  background-color: red;
  color: black;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
    <div class="header">
        <div class="logo-container">
          <img src="pic/logo.png" alt="Logo" width="60px" height="50px" margin-left="50px">
          <span class="text">LIBIS GYM</span>
        </div>
    </div>

    <div class="sidebar">
        <a class="active" href="admin.php">Dashboard</a>
        <a href="booking.php">Booking</a>
        <a href="users.php">Users</a>
        <a href="message.php">Messages</a>
    </div>
    <!--footer section-->
    <footer>
        <p>Privacy Policy | Terms and Conditions</p>
      </footer>
    <!--login section-->

    
</body>
</html>
