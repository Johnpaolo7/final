<?php
// process.php
require_once 'config.php'; // Include the database connection

session_start();

//login.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists in the database
    $stmt = $pdo->prepare("SELECT * FROM tbl_user WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Plain text password comparison (insecure, but matches your current setup)
        if ($password == $user['pword']) {
            // Password is correct, create session variables
            $_SESSION['restrictLogin'] = 1; // User is logged in
            $_SESSION['id'] = $user['id']; // Save user ID in session
            $_SESSION['email'] = $user['email']; // Save email in session

            // Redirect based on user_level
            switch ($user['user_level']) {
                case 1:
                    header("Location: admin.php");
                    break;
                case 2:
                    header("Location: guest.php");
                    break;
                case 3:
                    header("Location: premium.php");
                    break;
                default:
                    // Redirect to a default page if user_level doesn't match any case
                    header("Location: default.php");
                    break;
            }
            exit();
        } else {
            // Incorrect password
            echo "Invalid password.";
        }
    } else {
        // User not found
        echo "No user found with that email address.";
    }
}
?>

// signup.php
//require_once 'config.php'; // Include your database connection
//session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
    // $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM tbl_user WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // User with this email already exists
        echo "A user with this email already exists.";
    } else {
        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO tbl_user (firstname, lastname, phone, birthdate, gender, email, pword, user_level) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstname, $lastname, $phone, $birthdate, $gender, $email, $password, 2]);

        // After signup, log the user in and start the session
        $_SESSION['restrictLogin'] = 1;
        $_SESSION['email'] = $email;

        // Redirect to a dashboard or home page after signup
        header("Location: index.php");
        exit();
    }
}
?>