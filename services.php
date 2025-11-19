<?php include 'includes/header.php'; ?>

<!-- Hero Section with Background Image -->
<section style="background: url('image/valdik.jpg') center center/cover no-repeat; height: 80vh;" class="text-white text-center d-flex align-items-center justify-content-center">
  <div>
    <h1 class="display-4 fw-bold">Our Event Services</h1>
    <p class="lead">Discover what we offer for every type of event.</p>
    <a href="#services" class="btn btn-outline-light mt-4">Scroll Down</a>
  </div>
</section>

<!-- Services List -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2 class="mb-3">What We Offer</h2>
        <p class="text-muted">From grand weddings to corporate meetups, we’ve got everything covered.</p>
      </div>
    </div>
    <div class="row">
      <!-- Service 1 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/event-management.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/wedding.jpg" class="card-img-top" alt="Wedding Planning">
            <div class="card-body text-center">
              <h5 class="card-title">Event Management</h5>
              <p class="card-text">Elegant, traditional, or modern – we plan events to perfection.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Service 2 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/decorations.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/decor.jpg" class="card-img-top" alt="Decorations">
            <div class="card-body text-center">
              <h5 class="card-title">Decorations</h5>
              <p class="card-text">Professional setups for weddings, receptions, and more.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Service 3 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/catering.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/food.jpg" class="card-img-top" alt="Catering">
            <div class="card-body text-center">
              <h5 class="card-title">Catering Service</h5>
              <p class="card-text">Savor the moments with our delightful dishes.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Service 4 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/haldi.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/hald.jpg" class="card-img-top" alt="Haldi Ceremony">
            <div class="card-body text-center">
              <h5 class="card-title">Haldi Ceremony</h5>
              <p class="card-text">Soaking in the golden blessings of haldi.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Service 5 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/led-screen.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/led.jpg" class="card-img-top" alt="LED Screen">
            <div class="card-body text-center">
              <h5 class="card-title">LED Screen Service</h5>
              <p class="card-text">Perfect backdrop with LED screens for DJ nights and mehendi ceremonies.</p>
            </div>
          </div>
        </a>
      </div>
      <!-- Service 6 -->
      <div class="col-md-4 mb-4">
        <a href="service-details/sounds-lights.php" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-sm">
            <img src="image/dj.jpg" class="card-img-top" alt="Sounds And Lights">
            <div class="card-body text-center">
              <h5 class="card-title">Sounds And Lights</h5>
              <p class="card-text">Cheers to a night filled with laughter, music, and incredible memories.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="text-white text-center py-5" style="background-color: #212529;">
  <div class="container">
    <h2>Let’s Plan Your Next Big Event!</h2>
    <p>Reach out to us and we’ll help you get started.</p>
    <a href="contact.php" class="btn btn-light">Contact Us</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
