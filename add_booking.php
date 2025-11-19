<?php
include 'db.php';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $success = "Booking added successfully.";
    }
}
?>

<h4>Add New Booking</h4>
<?php if ($success): ?>
  <div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form method="POST" class="mb-4" style="max-width: 600px;">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Subject</label>
    <input type="text" name="subject" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Message</label>
    <textarea name="message" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-success">Add Booking</button>
</form>
