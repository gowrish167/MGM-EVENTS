<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}

// Correct paths since db.php and includes/header.php are in the same directory
include 'db.php';
include 'includes/header.php';
?>

<section class="py-5">
  <div class="container">

    <?php if (isset($_SESSION['success'])): ?>
      <div class="alert alert-success text-center">
        <?= $_SESSION['success']; unset($_SESSION['success']); ?>
      </div>
    <?php endif; ?>

    <h2 class="mb-4">Contact Messages</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
          $result = $conn->query($sql);
          if ($result && $result->num_rows > 0):
            $i = 1;
            while ($row = $result->fetch_assoc()):
          ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
              <form method="POST" action="delete_booking.php" onsubmit="return confirm('Cancel this booking?')">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
              </form>
            </td>
          </tr>
          <?php endwhile; else: ?>
            <tr>
              <td colspan="7" class="text-center">No messages found.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
