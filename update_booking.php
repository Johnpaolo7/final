<?php
// Assuming you already have database connection established
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book_id = $_POST['book_id'];
    $book_stats = $_POST['book_stats'];

    // Prepare an SQL statement to update the booking status
    $stmt = $pdo->prepare("UPDATE tbl_book SET book_stats = ? WHERE book_id = ?");
    $stmt->execute([$book_stats, $book_id]);

    // Redirect or show a success message
    header('Location: bookings.php'); // Redirect to the bookings page after update
    exit;
}
?>

