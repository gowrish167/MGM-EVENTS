<?php
session_start();
include 'db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = hash('sha256', $_POST['password']); // Must match how you stored it

    $stmt = $conn->prepare("SELECT * FROM admin_login WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .login-card {
      background: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      padding: 30px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <div class="mx-auto login-card" style="max-width: 400px;">
    <h2 class="text-center mb-4">Admin Login</h2>
    <?php if ($error): ?>
      <div class="alert alert-danger text-center"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
