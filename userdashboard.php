<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
include 'includes/header.php';
?>

<section class="py-5">
  <div class="container text-center">
    <h2>Welcome, <?= $_SESSION['user_name'] ?>!</h2>
    <p class="lead">This is your user dashboard.</p>
    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
