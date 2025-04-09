<?php echo $this->include('Pages/Navbar') ?>

<main class="main">

  <!-- Hero Section -->
  <section id="Home" class="hero section dark-background">

<img src="assets/img/bg2.jpg" alt="" data-aos="fade-in">

<div class="container">

<div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
<div class="col-xl-12">
<h2>
TRACKER
<span>.</span>
</h2>
  </div>
</section>

  <!-- Project Tracker Section -->
  <section id="project-tracker" class="section py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-5 fw-bold display-4 text-primary">Project Tracker Page</h2>

    <!-- Agency Logos -->
    <div class="row justify-content-center align-items-center mb-4">
      <div class="col-6 col-md-3 text-center mb-3 mb-md-0">
        <img src="assets/img/PHSeal.png" alt="PH Seal" class="img-fluid" style="max-height: 130px;">
      </div>
      
    <!-- Project Details -->
    <h4 class="fw-bold mb-3">1. Free Wi-Fi for All Program</h4>

    <p class="fw-semibold text-primary mb-1">Description & Goals:</p>
    <p>
      The Free Wi-Fi for All program, led by the Department of Information and Communications Technology (DICT),
      aims to provide free, reliable internet access in public areas like plazas, government offices, transport terminals,
      schools, SUCs, and rural health units. It promotes digital inclusion, reduces the urban-rural digital divide, and
      supports connectivity for education, governance, emergency response, and public services.
    </p>

    <!-- Objectives -->
    <p class="fw-semibold text-primary">Key Objectives:</p>
    <ul>
      <li>Expand access to internet services in underserved areas.</li>
      <li>Empower citizens through connectivity for education, e-commerce, telemedicine, and government services.</li>
      <li>Improve disaster response and emergency communications through public access points.</li>
    </ul>

    <p><strong>Implementing Agency:</strong> DICT</p>
    <p><strong>Launch Date:</strong> March 2017</p>

    <!-- Dynamic Pie Chart -->
    <div class="d-flex justify-content-center align-items-center my-4" style="height: 400px;">
      <canvas id="wifiChart" style="max-width: 400px; width: 100%; height: auto;"></canvas>
    </div>

    <p><strong>Target Timeline:</strong> 2026</p>
    <p class="fw-semibold text-primary">Notable Updates:</p>
    <ul>
      <li>Over 18,000 live sites as of 2024, spanning all regions.</li>
      <li>Prioritized rollout in geographically isolated and disadvantaged areas (GIDAs).</li>
      <li>New satellite broadband partnerships in 2023 for remote islands.</li>
    </ul>

    <!-- WiFi Logo for NBP Section -->
    <div class="text-center mb-3">
      <img src="assets/img/wifi.png" alt="Free WiFi Logo" class="img-fluid" style="max-height: 130px;">
    </div>

    <!-- Additional Project -->
    <h4 class="fw-bold mt-3 mb-3">2. National Broadband Plan (NBP)</h4>

    <p class="fw-semibold text-primary mb-1">Description & Goals:</p>
    <p>
      The <strong>National Broadband Program (NBP)</strong> aims to build a robust, inclusive, and affordable broadband infrastructure that is owned and managed by the government. This initiative envisions the creation of a nationwide fiber optic backbone that will interconnect provinces, cities, and municipalities across the Philippines. By providing high-capacity and high-speed internet connectivity, the NBP seeks to enhance the delivery of public services through e-governance platforms, strengthen the education sector by supporting online learning and digital classrooms, and drive economic growth by enabling businesses, particularly those in remote areas, to participate in the digital economy. The program also aims to reduce the country’s reliance on private internet providers, lower overall internet costs, and ensure that even the most underserved communities can access reliable digital infrastructure. Ultimately, the NBP is a vital step toward achieving digital transformation, national competitiveness, and inclusive progress in the information age.
    </p>

    <div class="d-flex justify-content-center align-items-center my-4" style="height: 400px;">
      <canvas id="nbpChart" style="max-width: 400px; width: 100%; height: auto;"></canvas>
    </div>
  </div>
</section>


  <section id="egmp-2022" class="section py-5">
    <div class="container" data-aos="fade-up">
      <h2 class="text-center mb-5 fw-bold display-4 text-primary">e-Government Masterplan 2022 (EGMP)</h2>

      <h4 class="fw-bold mb-3">3. e-Government Masterplan 2022 (EGMP)</h4>
      <p class="fw-semibold text-primary mb-1">Description & Goals:</p>
      <p>
        The <strong>e-Government Master Plan (EGMP) 2022</strong> serves as a comprehensive roadmap for how the Philippine government will strategically use Information and Communications Technology (ICT) to modernize governance, streamline internal operations, and enhance the delivery of public services.
      </p>

      <p class="fw-semibold text-primary">Key Objectives:</p>
      <ul>
        <li>Integrate and interconnect all government systems.</li>
        <li>Provide efficient digital services for citizens and businesses.</li>
        <li>Reduce bureaucracy and eliminate redundant processes.</li>
        <li>Enable data-driven governance.</li>
      </ul>

      <p><strong>Implementing Agency:</strong> DICT</p>
      <p><strong>Launch Date:</strong> 2020</p>
      <p><strong>Target Timeline:</strong> 2025</p>

      <p class="fw-semibold text-primary">Notable Updates:</p>
      <ul>
        <li>Over 200 government services digitized.</li>
        <li>The Philippine Government Interoperability Framework (PGIF) finalized.</li>
        <li>Implementation of cloud-based platforms and eGov mobile app started in 2024.</li>
      </ul>

      <div class="d-flex justify-content-center align-items-center my-4" style="height: 400px;">
        <canvas id="egmpChart2022" style="max-width: 400px; width: 100%; height: auto;"></canvas>
      </div>
    </div>
  </section>
  <section id="philsys" class="section py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-5 fw-bold display-4 text-primary">Philippine Identification System (PhilSys)</h2>

    <h4 class="fw-bold mb-3">4. PhilSys (Philippine Identification System)</h4>
    <p class="fw-semibold text-primary mb-1">Description & Goals:</p>
    <p>
      The <strong>Philippine Identification System (PhilSys)</strong> is the government’s central identification platform designed to provide every Filipino citizen and resident alien with a <strong>unique and permanent 12-digit PhilSys Number (PSN)</strong>. As a foundational digital ID system, PhilSys aims to streamline and simplify access to a wide range of <strong>government and financial services</strong>, ensuring that individuals can be easily and securely identified across various platforms. 
    </p>
    <p>
      By offering a single, verifiable source of identity, PhilSys reduces the need for multiple IDs and helps eliminate redundancy and fraud in public transactions. It also plays a vital role in promoting <strong>financial inclusion</strong>, especially for underserved populations who may not have access to traditional forms of identification.
    </p>
    <p>
      Additionally, <strong>PhilSys</strong> supports efforts to <strong>strengthen national security</strong>, enhance the accuracy of demographic data, and improve the efficiency of social protection programs and public service delivery. Overall, <strong>PhilSys</strong> is a key component in building a more inclusive, transparent, and digitally empowered society.
    </p>

    <div class="text-center my-4">
      <img src="assets/img/ph2.png" alt="PhilSys Logo" class="img-fluid" style="max-height: 200px;">
    </div>
    

    <p class="fw-semibold text-primary">Key Objectives:</p>
    <ul>
      <li>Create a single digital ID for all citizens and resident aliens.</li>
      <li>Improve service delivery through identity verification.</li>
      <li>Promote financial inclusion</li>
      <li>Reduce fraud and red tape.</li>

    </ul>
    <p><strong>Implementing Agency:</strong> PSA (with DICT support)</p>
<p><strong>Launch Date:</strong> August 2020</p>
<p><strong>Target Timeline:</strong> 2025</p>

<div class="d-flex justify-content-center align-items-center my-4" style="height: 400px;">
  <canvas id="philsysChart" style="max-width: 400px; width: 100%; height: auto;"></canvas>
</div>

<p class="fw-semibold text-primary">Notable Updates:</p>
<ul>
  <li>Over 80 million registrants as of 2024.</li>
  <li>Integration with banks, SSS, PhilHealth, and public schools ongoing.</li>
  <li>Mobile app launched in 2023 for digital ID access.</li>
</ul>

    
</section>
<section id="cybersecurity" class="section py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-5 fw-bold display-4 text-primary">Cybersecurity Management System</h2>

    <!-- Cybersecurity Image on top of the title (Much Bigger Image) -->
    <div class="text-center mb-4">
      <img src="assets/img/ph3.png" alt="Cybersecurity Logo" class="img-fluid" style="max-height: 500px;">
    </div>

    <h4 class="fw-bold mb-3">5. Cybersecurity Management System</h4>

    <p class="fw-semibold text-primary mb-1">Key Objectives:</p>
    <ul>
      <li>Establish a secure and resilient ICT infrastructure.</li>
      <li>Monitor, detect, and respond to cyber incidents in real time.</li>
      <li>Conduct public awareness campaigns and capacity-building activities.</li>
      <li>Implement the National Cybersecurity Plan 2022.</li>
    </ul>

    <p class="fw-semibold text-primary mb-1">Implementing Agency:</p>
    <p>DICT – <a href="https://dict.gov.ph/" target="_blank">Cybersecurity Bureau</a></p>

    <p class="fw-semibold text-primary mb-1">Launch Date:</p>
    <p>January 2022</p>

    <p class="fw-semibold text-primary mb-1">Target Timeline:</p>
    <p>2026</p>

    <!-- Smaller Pie Chart -->
    <div style="max-width: 300px; margin: 0 auto;">
      <canvas id="cybersecurityChart"></canvas>
    </div>

    <p class="fw-semibold text-primary mt-4">Notable Updates:</p>
    <ul>
      <li>Launched the Cybersecurity Emergency Response Team (CERT-PH).</li>
      <li>Partnerships with global cybersecurity firms for threat intelligence.</li>
      <li>Cyber hygiene training for LGUs and educational institutions ongoing.</li>
    </ul>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/main.js"></script>

<!-- Charts -->
<script>
  const wifiCtx = document.getElementById('wifiChart').getContext('2d');
  const wifiChart = new Chart(wifiCtx, {
    type: 'pie',
    data: {
      labels: ['Progress (60%)', 'Continuing (20%)', 'NBP Coverage (20%)'],
      datasets: [{
        data: [60, 20, 20],
        backgroundColor: ['#FF6384', '#36A2EB', '#4CAF50'],
        borderColor: '#ffffff',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
        tooltip: {
          callbacks: {
            label: context => `${context.label}: ${context.parsed}%`
          }
        }
      }
    }
  });

  const nbpCtx = document.getElementById('nbpChart').getContext('2d');
  const nbpChart = new Chart(nbpCtx, {
    type: 'pie',
    data: {
      labels: ['Fiber Backbone (50%)', 'Satellite Access (30%)', 'Underserved Areas (20%)'],
      datasets: [{
        data: [50, 30, 20],
        backgroundColor: ['#FFCE56', '#FF6384', '#36A2EB'],
        borderColor: '#ffffff',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
        tooltip: {
          callbacks: {
            label: context => `${context.label}: ${context.parsed}%`
          }
        }
      }
    }
  });

  const egmp2022Ctx = document.getElementById('egmpChart2022').getContext('2d');
  const egmpChart2022 = new Chart(egmp2022Ctx, {
    type: 'pie',
    data: {
      labels: ['Progress (62%)', 'Continuing (27%)', 'Upcoming (11%)'],
      datasets: [{
        data: [62, 27, 11],
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
        borderColor: '#ffffff',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
        tooltip: {
          callbacks: {
            label: context => `${context.label}: ${context.parsed}%`
          }
        }
      }
    }
  });
</script>
<script>
    const philsysCtx = document.getElementById('philsysChart').getContext('2d');
const philsysChart = new Chart(philsysCtx, {
  type: 'pie',
  data: {
    labels: ['Progress (85%)', 'Continuing (15%)'],
    datasets: [{
      data: [85, 15],
      backgroundColor: ['#FF007F', '#7CFC00'],
      borderColor: '#ffffff',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'bottom' },
      tooltip: {
        callbacks: {
          label: context => `${context.label}: ${context.parsed}%`
        }
      }
    }
  }
});
</script>
<script>
const cybersecurityCtx = document.getElementById('cybersecurityChart').getContext('2d');
const cybersecurityChart = new Chart(cybersecurityCtx, {
  type: 'pie',
  data: {
    labels: ['Progress (60%)', 'Continuing (40%)'],
    datasets: [{
      data: [60, 40],
      backgroundColor: ['#FF007F', '#7CFC00'],  // pink and green
      borderColor: '#ffffff',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { position: 'bottom' },
      tooltip: {
        callbacks: {
          label: context => `${context.label}: ${context.parsed}%`
        }
      }
    }
  }
});
</script>
