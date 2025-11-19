<?php include 'includes/header.php'; ?>
<?php include 'db.php'; ?>

<?php
$success = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
  if ($stmt->execute()) {
    $success = "Thank you! Your message has been submitted.";
  }
}
?>

<!-- Page Banner -->
<section class="text-white text-center py-5" style="background-color: #0d6efd;">
  <div class="container">
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead">We'd love to hear from you!</p>
  </div>
</section>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">

    <?php if ($success): ?>
      <div class="alert alert-success text-center"><?php echo $success; ?></div>
    <?php endif; ?>

    <div class="row g-5">
      <!-- Contact Info -->
      <div class="col-md-4">
        <div class="bg-light p-4 rounded shadow-sm">
          <h4 class="mb-4"><i class="bi bi-person-fill"></i> MGM Events</h4>
          <p><i class="bi bi-envelope-fill me-2"></i>Email: mgmevents16@gmail.com</p>
          <p><i class="bi bi-link-45deg me-2"></i>Instagram: <a href="https://www.instagram.com/mgmevents" target="_blank">instagram.com/mgmevents</a></p>
          <p><i class="bi bi-phone-fill me-2"></i>Mobile: 7892294978</p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-8">
        <div class="bg-white p-4 rounded shadow-sm">
          <h4 class="mb-4">Send us a message</h4>
          <form method="POST" action="">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Subject</label>
              <input type="text" name="subject" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea name="message" class="form-control" rows="5" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Google Map -->
<section class="py-4">
  <div class="container">
    <h4 class="mb-4 text-center">Find Us at MGM College, Udupi</h4>
    <div class="ratio ratio-16x9 shadow rounded">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.254472603885!2d74.73621987506027!3d13.332687607918104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbb9f2f297b3d%3A0x729f9d51262d5ff0!2sMGM%20College%2C%20Udupi!5e0!3m2!1sen!2sin!4v1716643061181!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
