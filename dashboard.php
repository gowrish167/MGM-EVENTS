<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
include 'includes/header.php';
?>

<section class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Welcome, Admin!</h2>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Contact Messages</h5>
            <p class="card-text">View messages submitted from the contact form.</p>
            <a href="view_contacts.php" class="btn btn-primary">View Contact Messages</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
