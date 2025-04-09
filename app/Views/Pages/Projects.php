<?= $this->include('Pages/Navbar') ?>

<main class="main">

  <!-- Hero Section -->
  <section id="Home" class="hero section dark-background">

<img src="assets/img/bg2.jpg" alt="" data-aos="fade-in">

<div class="container">

<div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
<div class="col-xl-12">
<h2>
PROJECTS
<span>.</span>
</h2>
  </div>
</section>
  <!-- ICT Projects Overview -->
  <section id="ict-projects" class="section">
    <div class="container" data-aos="fade-up">
      <div class="section-header text-center mb-5">
        <h2 class="fw-bold">Active ICT Projects and Agency System Overview</h2>
      </div>

      <!-- ICT Projects List -->
      <div class="mb-5">
        <h4 class="text-danger">📊 Number of Active ICT Projects</h4>
        <p><strong>There are currently 3 major active ICT projects in the Philippines:</strong></p>
        <ol class="ps-3">
          <li><strong>National Fiber Backbone (NFB) Project</strong> – Aims to improve internet speed and coverage nationwide through a government-owned fiber network.</li>
          <li><strong>Philippine Digital Infrastructure Project (PDIP)</strong> – Focuses on expanding cloud services, data centers, and secure digital systems.</li>
          <li><strong>Digital Cities 2025 Initiative</strong> – Designed to digitally transform cities and local government units for improved services and citizen engagement.</li>
        </ol>
      </div>

      <!-- Free Wi-Fi Access -->
      <div class="mb-5">
        <h4 class="text-danger">📶 Free Wi-Fi Access Points Installed</h4>
        <p>
          As of now, approximately <strong>12,000 active free Wi-Fi access points</strong> have been installed across the Philippines. These hotspots aim to provide internet access in public places such as:
        </p>
        <ul>
          <li>Plazas and parks</li>
          <li>Schools and universities</li>
          <li>Public transportation hubs</li>
          <li>Government buildings</li>
        </ul>
        <p>
          🔗 <a href="https://freepublicwifi.gov.ph/livehotspots/" target="_blank">Click here to view live hotspot status</a>
        </p>

        <!-- Enhanced Image Section -->
        <div class="text-center mt-4">
          <img src="assets/img/freewifi.png" alt="Free Wi-Fi Hotspots"
               class="img-fluid rounded-4 shadow-lg"
               style="max-width: 800px; width: 100%; height: auto; border: 2px solid #ddd;">
          <p class="text-muted mt-2">Figure: Sample map showing live Free Wi-Fi hotspots around the Philippines.</p>
        </div>
      </div>

      <!-- System Overview Table -->
      <hr class="my-5">

      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead class="table-dark">
            <tr>
              <th>Agency</th>
              <th>System Status</th>
              <th>Cybersecurity</th>
              <th>Project Progress</th>
              <th>Connectivity</th>
              <th>Service Availability</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-start fw-semibold">1. Department of Information and Communications Technology (DICT)</td>
              <td>🟢 Stable – Official website is operational and accessible.</td>
              <td>🟢 Low Threat Level – No reported incidents.</td>
              <td>🟢 On Track – National ICT development programs ongoing.</td>
              <td>🟢 Expanding – Infrastructure and services being enhanced.</td>
              <td>🟢 Available – All services and resources accessible.</td>
            </tr>
            <tr>
              <td class="text-start fw-semibold">2. National Bureau of Investigation (NBI)</td>
              <td>🟢 Stable – Website is up and running.</td>
              <td>🟢 Low Threat Level – No current issues.</td>
              <td>🟢 Ongoing – Law enforcement and clearance services provided.</td>
              <td>🟢 Operational – NBI Clearance and online services functional.</td>
              <td>🟢 Available – All public services are accessible.</td>
            </tr>
            <tr>
              <td class="text-start fw-semibold">3. Department of Justice (DOJ)</td>
              <td>🟢 Stable – Official site operational.</td>
              <td>🟢 Low Threat Level – No reported threats.</td>
              <td>🟢 Ongoing – Legal and justice administration active.</td>
              <td>🟢 Operational – Online resources available.</td>
              <td>🟢 Available – DOJ Action Center and services accessible.</td>
            </tr>
            <tr>
              <td class="text-start fw-semibold">4. National Privacy Commission (NPC)</td>
              <td>🟢 Stable – Website active and accessible.</td>
              <td>🟢 Low Threat Level – No incidents reported.</td>
              <td>🟢 On Track – Privacy initiatives and monitoring ongoing.</td>
              <td>🟢 Operational – Platforms and resources functioning.</td>
              <td>🟢 Available – Services and contact channels accessible.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

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
  <script src="assets/js/main.js"></script>

  <!-- Custom Styling -->
  <style>
    .table th, .table td {
      vertical-align: middle;
    }
    .section-header h2 {
      font-size: 2rem;
    }
    .scroll-top {
      background: #e84545;
    }
    ol, ul {
      padding-left: 1.5rem;
    }
    img:hover {
      transform: scale(1.02);
      transition: transform 0.3s ease;
    }
  </style>
</main>
