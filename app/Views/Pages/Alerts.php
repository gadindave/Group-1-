<?= $this->include('Pages/Navbar') ?>

<main class="main">

  <!-- Hero Section -->
  <section id="Home" class="hero section dark-background">

<img src="assets/img/bg2.jpg" alt="" data-aos="fade-in">

<div class="container">

<div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
<div class="col-xl-12">
<h2>
ALERTS
<span>.</span>
</h2>
  </div>
</section>


  <!-- Public Advisories Section -->
  <section id="public-advisories" class="section advisories-section">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-5 fw-bold display-4 text-primary">Public Advisories</h2>

      <!-- Images Side by Side -->
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 mb-4">
          <img src="assets/img/fake2.jpg" alt="Identity Theft or Hacking" class="advisory-img">
        </div>
        <div class="col-md-6 mb-4">
          <img src="assets/img/fake1.jpg" alt="Fake Websites and Investment Scams" class="advisory-img">
        </div>
      </div>

      <!-- Identity Theft Section -->
      <div class="row justify-content-center mb-4">
        <div class="col-12 advisory-card">
          <h3 class="text-danger fw-bold mb-3 text-center">Identity Theft</h3>
          <p class="fs-5 text-center">Identity theft is a serious crime. Learn how to report it and protect yourself from further harm.</p>
          <p class="text-primary fw-semibold fs-5 text-center">What to Do If You Suspect Identity Theft:</p>
          <ul class="fs-5 list-style">
            <li>Contact Your Bank: Immediately notify your bank and credit card companies.</li>
            <li>File a Police Report: Obtain a copy for your records.</li>
            <li>Report to the FTC: Visit IdentityTheft.gov to report and get a recovery plan.</li>
          </ul>
        </div>
      </div>

      <!-- Fake Websites Section -->
      <div class="row justify-content-center mb-4">
        <div class="col-12 advisory-card">
          <h3 class="text-danger fw-bold mb-3 text-center">Detecting Fake Websites</h3>
          <p class="fs-5 text-center">Fake websites can steal your personal information. Learn how to identify them.</p>
          <p class="text-primary fw-semibold fs-5 text-center">Tips for Spotting a Fake Website:</p>
          <ul class="fs-5 list-style">
            <li>Check the URL: Look for misspellings or unusual domain names.</li>
            <li>Verify Security: Ensure the site has "https" and a padlock icon in the address bar.</li>
            <li>Review Contact Information: Legitimate sites should have clear and valid contact details.</li>
            <li>Too good to be true offers</li>
            <li>Unusual payment methods</li>
            <li>Lack of contact info or poor grammar</li>
          </ul>
        </div>
      </div>

      <!-- Investment Scams Section -->
      <div class="row justify-content-center mb-4">
        <div class="col-12 advisory-card">
          <h3 class="text-danger fw-bold mb-3 text-center">Detecting Investment Scams</h3>
          <p class="fs-5 text-center">Protect your money by learning to recognize investment scams.</p>
          <p class="text-primary fw-semibold fs-5 text-center">Warning Signs of Investment Scams:</p>
          <ul class="fs-5 list-style">
            <li>High-Pressure Sales Tactics: Be wary of immediate investment demands.</li>
            <li>Promises of Guaranteed Returns: No investment is risk-free.</li>
            <li>Unsolicited Offers: Be cautious of offers from unknown sources.</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <div class="copyright py-3">
    <div class="container text-center">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>
  </div>

</main>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Custom CSS -->
<style>
  .advisories-section {
    background-color: #f9f9f9;
    padding: 60px 0;
  }

  .advisory-img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  }

  .advisory-card {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-top: 10px;
  }

  .list-style {
    padding-left: 2rem;
    max-width: 900px;
    margin: 0 auto;
  }

  @media (max-width: 768px) {
    .advisory-img {
      margin-bottom: 20px;
    }
  }
</style>
