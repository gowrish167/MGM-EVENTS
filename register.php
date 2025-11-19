<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event_name = $_POST['event_name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, event_name, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $event_name, $password);

    if ($stmt->execute()) {
        $message = "Registration successful. <a href='login.php'>Login</a>";
    } else {
        $message = "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mx-auto shadow" style="max-width: 500px;">
        <div class="card-body">
            <h3 class="text-center mb-4">User Registration</h3>
            <?php if (isset($message)) echo "<div class='alert alert-info'>$message</div>"; ?>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Event Name</label>
                    <input type="text" name="event_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Register</button>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</div>
</body>
</html>
