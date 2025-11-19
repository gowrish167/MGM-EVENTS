<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<style>
/* Hero Section */
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('image/haldicele.jpg') no-repeat center center/cover;
    height: 70vh;
    color: white;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

/* Hero text layering */
.hero-section .container {
    position: relative;
    z-index: 2;
}

.hero-section h1,
.hero-section p {
    z-index: 2;
}

/* Smooth scroll */
html {
    scroll-behavior: smooth;
}

/* About Section */
#about-content {
    background: linear-gradient(to right, #f9f9f9, #ffffff);
}

/* Why Choose Us Section */
.why-section {
    background: linear-gradient(to right, #f0f4f8, #e4ecf3);
}

/* Card styling */
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 16px;
    background: white;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

/* Icon styling */
.card i {
    font-size: 2.5rem;
    padding: 20px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 1rem;
}

.text-primary {
    background: #e6f0ff;
    color: #007bff;
}

.text-success {
    background: #e9f9ef;
    color: #28a745;
}

.text-warning {
    background: #fff8e6;
    color: #ffc107;
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold">About MGM Events</h1>
        <p class="lead">We don’t just plan events — we create unforgettable experiences.</p>
        <a href="#about-content" class="btn btn-outline-light mt-4">Scroll Down</a>
    </div>
</div>

<!-- About Section -->
<section id="about-content" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Who We Are</h2>
        <p class="text-muted text-center mb-5">
            MGM Events is a full-service event management company that brings passion, creativity, and precision to every celebration. 
            From small gatherings to large-scale productions, we design and execute exceptional events that reflect your vision and exceed expectations.
        </p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>Our Mission</h4>
                <p>To deliver seamless, personalized, and inspiring events by combining creative vision with flawless execution.</p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>Our Vision</h4>
                <p>To be recognized as the most innovative and customer-focused event planning company in the industry.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-section py-5">
    <div class="container text-center">
        <h2 class="mb-4">Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <i class="bi bi-lightning-charge-fill text-primary"></i>
                        <h5 class="card-title mt-3">Creative Ideas</h5>
                        <p class="card-text">We bring fresh and unique concepts to every event to make it stand out.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <i class="bi bi-calendar-check-fill text-success"></i>
                        <h5 class="card-title mt-3">Reliable Planning</h5>
                        <p class="card-text">Our experienced team ensures every detail is managed to perfection.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <i class="bi bi-star-fill text-warning"></i>
                        <h5 class="card-title mt-3">Client Satisfaction</h5>
                        <p class="card-text">Our top priority is delivering results that delight our clients every time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
