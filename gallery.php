<?php include 'includes/header.php'; ?>

<!-- Page Banner with Brightened Background -->
<section class="text-white text-center d-flex justify-content-center align-items-center"
         style="height: 60vh; 
                background: url('image/mantap.jsp') center center / cover no-repeat;
                position: relative;
                filter: brightness(1.2);">
  
  <!-- Optional light overlay (very transparent) -->
  <div class="w-100 h-100 d-flex justify-content-center align-items-center" 
       style="background-color: rgba(0, 0, 0, 0.1); position: absolute; top: 0; left: 0;">
  </div>

  <!-- Content on top -->
  <div style="position: relative; z-index: 1;">
    <h1 class="display-4 fw-bold">Event Gallery</h1>
    <p class="lead">Explore moments from our past events</p>
  </div>
</section>

<!-- Gallery Grid Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2 class="mb-3">Memorable Highlights</h2>
        <p class="text-muted">A glimpse into the events we've crafted with care and creativity.</p>
      </div>
    </div>

    <div class="row g-4">
      <?php
      $image = [
        "wed1.jpg", "wed.jpg", "night3.jpg", "wed3.jpg",
        "entrance.jpg", "haldi5.jpg", "haldi4.jpg", "night1.jpg",
        "wed7.jpg", "flower.jpg", "flower1.jpg", "flower2.jpg"
      ];

      foreach ($image as $img) {
        echo '
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card shadow-sm">
            <img src="image/' . $img . '" class="card-img-top" alt="Event Image">
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
