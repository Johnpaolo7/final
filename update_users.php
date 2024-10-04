<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=libisgym_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Assuming you have user ID and new user level from a form submission
$userId = $_POST['id']; // example from form
$newUserLevel = $_POST['user_level']; // example from form

$stmt = $pdo->prepare("UPDATE tbl_user SET user_level = ? WHERE id = ?");
$stmt->execute([$newUserLevel, $userId]);

echo "User level updated successfully.";
?>
