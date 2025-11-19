<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Welcome to Admin Dashboard</h2>
    <p class="text-center">You are logged in as <strong><?= $_SESSION['admin']; ?></strong></p>
    <div class="text-center mt-4">
        <a href="view_contacts.php" class="btn btn-primary">View Contact Messages</a>
        <a href="logout.php" class="btn btn-danger ms-2">Logout</a>
    </div>
</div>
</body>
</html>
