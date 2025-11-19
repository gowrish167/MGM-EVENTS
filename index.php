<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="style.css">

<!-- Hero Section -->
<div class="hero-section text-center text-white d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-4 fw-bold">Welcome to MGM Events</h1>
    <p class="lead">Your dream event starts here. We plan, manage, and deliver unforgettable experiences.</p>
    <a href="contact.php" class="btn btn-primary">Book an Event</a>
</div>

<!-- About Preview -->
<section class="py-5">
  <div class="container text-center">
    <h2>About Us</h2>
    <p class="text-muted">We are a full-service event management company, specializing in weddings, corporate functions, parties, and more. We turn your vision into reality.</p>
    <a href="about.php" class="btn btn-outline-dark mt-2">Learn More</a>
  </div>
</section>

<!-- Services -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="image/marriage.jpg" class="card-img-top" alt="Event Management">
          <div class="card-body">
            <h5 class="card-title">Event Management</h5>
            <p class="card-text">Creating memorable experiences through meticulous planning and seamless execution.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="image/wed.jpg" class="card-img-top" alt="Decorations">
          <div class="card-body">
            <h5 class="card-title">Decorations</h5>
            <p class="card-text">We plan picture-perfect decorations tailored to your style and tradition.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="image/vanas.jpg" class="card-img-top" alt="Catering Service">
          <div class="card-body">
            <h5 class="card-title">Catering Service</h5>
            <p class="card-text">Elevating your event with exceptional catering crafted for unforgettable moments.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="services.php" class="btn btn-dark mt-4">View All Services</a>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-white" style="background-color: #212529;">
  <div class="container text-center">
    <h2>Ready to Plan Your Event?</h2>
    <p>Let’s make your next event extraordinary. Contact us today to get started!</p>
    <a href="contact.php" class="btn btn-outline-light">Contact Us</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
