<?php
session_start(); // Start session to store messages

include 'db.php'; // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Booking has been successfully canceled.";
    } else {
        $_SESSION['error'] = "Failed to cancel booking.";
    }

    $stmt->close();
} else {
    $_SESSION['error'] = "Invalid request.";
}

header("Location: view_contacts.php");
exit();
