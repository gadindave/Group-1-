<?= $this->include('Pages/Navbar') ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="Home" class="hero section dark-background">

      <img src="assets/img/bg2.jpg" alt="" data-aos="fade-in">

      <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-12">
      <h2>
  NATIONAL ICT GOVERNANCE OVERVIEW
  <span>.</span>
</h2>

<div class="d-flex flex-wrap justify-content-between gap-3">
  <p class="flex-fill" style="min-width: 300px; font-size: 0.95rem;">
    Welcome to our website! Here, we share what we’ve learned about how the Philippine government handles ICT (Information and Communications Technology) and cybersecurity. We focused on four main agencies: the DICT, the DOJ Cybercrime Task Force, the NBI Cybercrime Division, and the NPC.
  </p>
  <p class="flex-fill" style="min-width: 300px; font-size: 0.95rem;">
    Our site explains what each agency does, the major ICT programs they’ve launched, and how they help protect our online spaces. We also created an interactive dashboard where you can explore data and updates about national ICT efforts from 2020 up to today.
  </p>
  <p class="flex-fill" style="min-width: 300px; font-size: 0.95rem;">
    This website aims to make information easier to understand and more accessible, helping promote awareness and transparency about ICT governance in the country.
  </p>
</div>



<div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">

<!-- DICT -->
<!-- DICT -->
<!-- DICT -->
<div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
  <div class="icon-box">
    <h3><a href="https://dict.gov.ph" target="_blank">Department of Information and Communications Technology</a></h3>
  </div>
</div>

<!-- DOJ -->
<div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
  <div class="icon-box">
    <h3><a href="https://doj.gov.ph" target="_blank">Department of Justice</a></h3>
  </div>
</div>

<!-- NBI -->
<div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
  <div class="icon-box">
    <h3><a href="https://nbi.gov.ph" target="_blank">National Bureau of Investigation</a></h3>
  </div>
</div>

<!-- NPC -->
<div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
  <div class="icon-box">
    <h3><a href="https://privacy.gov.ph" target="_blank">National Privacy Commission</a></h3>
  </div>
</div>



</div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
   <!-- ======= About Section ======= -->
<!-- Include Chart.js from CDN -->
<!-- Chart.js CDN (only once) -->

<!-- Add this CSS inside a <style> tag or in your main CSS -->
<style>
  .about .img-fluid {
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .about .img-fluid:hover {
    transform: scale(1.02);
  }

  .agency-stats .statistic-box {
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
  }

  .graph-placeholder {
    overflow-x: auto;
  }

  .status-indicators ul {
    list-style: none;
    padding-left: 0;
  }
</style>

<!-- Include Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-start">

      <!-- Content and Dashboard -->
      <div class="col-lg-12 content">
        <h3>Agency Overview & Dashboard</h3>
        <p class="fst-italic">
          The following data highlights the trend in cybercrime cases (YTD) in the Philippines from 2020 to 2025, along with key ICT initiatives.
        </p>

        <ul>
          <li><i class="bi bi-check2-all"></i> <strong>2020:</strong> 1.2 million cases – Online fraud, phishing, identity theft.</li>
          <li><i class="bi bi-check2-all"></i> <strong>2021:</strong> 2.8 million cases – Rise from e-commerce, cyberbullying, scams.</li>
          <li><i class="bi bi-check2-all"></i> <strong>2022:</strong> 11,523 cases – Online fraud, identity theft, cyber extortion.</li>
          <li><i class="bi bi-check2-all"></i> <strong>2023:</strong> 19,472 cases – Digital financial fraud and hacking.</li>
          <li><i class="bi bi-check2-all"></i> <strong>2024:</strong> 14,529 cases – Drop yet phishing and identity theft persist.</li>
          <li><i class="bi bi-check2-all"></i> <strong>2025 (Est.):</strong> 21K–23K – Increase due to digital scams and crypto fraud.</li>
        </ul>

        <p>
          The agency is also implementing major ICT projects and enhancing Wi-Fi access to support digital transformation.
        </p>

        <!-- Dashboard Area -->
        <div class="agency-stats mt-5">
          <h4>Agency Statistics (Dashboard)</h4>
          <p>The graph below presents the yearly trend in cybercrime cases (YTD) in the Philippines.</p>

          <!-- Chart Container -->
          <div class="graph-placeholder my-3" style="position: relative; height: 350px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 15px;">
            <canvas id="cybercrimeChart"></canvas>
          </div>

          <!-- Stats Boxes -->
          <div class="row">
            <div class="col-lg-4">
              <div class="statistic-box text-center p-3 border rounded">
                <h5>Latest Cybercrime Cases (2025 Est.)</h5>
                <p class="display-4">22,000</p>
                <p class="text-muted">(Estimated)</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="statistic-box text-center p-3 border rounded">
                <h5>Active ICT Projects</h5>
                <p class="display-4">3</p>
                <p class="text-muted">
                  <small>
                    <em>NFB Project</em><br>
                    <em>PDIP</em><br>
                    <em>Digital Cities 2025</em>
                  </small>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="statistic-box text-center p-3 border rounded">
                <h5>Free Wi-Fi Access Points</h5>
                <p class="display-4">12,000</p>
                <p class="text-muted">Active installations</p>
              </div>
            </div>
          </div>

          <!-- Status Badges -->
          <div class="status-indicators mt-4">
            <h5>Status Indicators</h5>
            <ul>
              <li><span class="badge bg-success">Stable</span> &nbsp; Systems operating normally.</li>
              <li><span class="badge bg-warning">Critical Updates</span> &nbsp; Ongoing security patch deployment.</li>
            </ul>
          </div>
        </div>

        <!-- Image Section (moved here) -->
        <div class="image-below-dashboard mt-5 text-center">
          <img src="assets/img/home.jpg" class="img-fluid" alt="Agency Overview Image">
        </div>

      </div>
    </div>
  </div>
</section>


<section id="ict-projects" class="section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <!-- Content and Chart -->
      <div class="col-lg-12 content">
        <h3>ICT Projects and Programs by Agency</h3>
        <p class="fst-italic">
          This data visualizes the number of ICT-related projects and programs implemented by government agencies in the Philippines.
        </p>

        <ul>
          <li><i class="bi bi-check2-all"></i> <strong>DICT:</strong> 10 projects – Cybersecurity, Free Wi-Fi, eGov services.</li>
          <li><i class="bi bi-check2-all"></i> <strong>DOJ:</strong> 18 projects – Case management, digital records, data systems.</li>
          <li><i class="bi bi-check2-all"></i> <strong>NPC:</strong> 6 projects – Data privacy tools, compliance monitoring.</li>
          <li><i class="bi bi-check2-all"></i> <strong>NBI:</strong> 7 projects – Cybercrime tracking and intelligence platforms.</li>
        </ul>

        <!-- Chart Section -->
        <div class="agency-stats mt-5">
          <h4>Project Distribution (Bar Graph)</h4>
          <p>This graph presents a comparative view of active ICT projects across key agencies.</p>

          <div class="graph-placeholder my-3" style="position: relative; height: 450px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 15px;">
            <canvas id="ictChart"></canvas>
          </div>

          <!-- Summary Box -->
          <div class="statistic-box p-3 border rounded mb-4">
            <h5 class="mb-2">Key Insight</h5>
            <p class="mb-0">DOJ leads with <strong>18 projects</strong>, showing high engagement in ICT, followed by DICT with <strong>10</strong>. NBI and NPC trail with <strong>7</strong> and <strong>6</strong> projects respectively.</p>
          </div>

          <!-- Image Section at Bottom -->
         

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Script (only load once if not already included elsewhere) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ictCtx = document.getElementById('ictChart').getContext('2d');
  const ictChart = new Chart(ictCtx, {
    type: 'bar',
    data: {
      labels: ['DICT', 'DOJ', 'NPC', 'NBI'],
      datasets: [{
        label: 'ICT Projects and Programs',
        data: [10, 18, 6, 7],
        backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
        borderRadius: 6,
        borderSkipped: false
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 2,
            precision: 0,
            font: { size: 14 }
          },
          title: {
            display: true,
            text: 'Number of Projects',
            font: { size: 16, weight: 'bold' }
          }
        },
        x: {
          ticks: {
            font: { size: 14 }
          }
        }
      },
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          callbacks: {
            label: context => `${context.dataset.label}: ${context.parsed.y}`
          }
        }
      }
    }
  });
</script>


<!-- Chart.js Graph Script -->
<!-- Chart Canvas -->


<!-- Chart Script -->
<script>
  const ctx = document.getElementById('cybercrimeChart').getContext('2d');
  const cybercrimeChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["2020", "2021", "2022", "2023", "2024"],
      datasets: [
        {
          label: "DICT",
          data: [10000, 12000, 15000, 19000, 23000],
          borderColor: "#004d99",
          backgroundColor: "rgba(0, 77, 153, 0.1)",
          borderWidth: 3,
          tension: 0.4,
          pointRadius: 5,
          pointHoverRadius: 7,
        },
        {
          label: "DOJ",
          data: [1500, 1800, 2200, 2000, 2500],
          borderColor: "#ff6600",
          backgroundColor: "rgba(255, 102, 0, 0.1)",
          borderWidth: 3,
          tension: 0.4,
          pointRadius: 5,
          pointHoverRadius: 7,
        },
        {
          label: "NPC",
          data: [800, 900, 1100, 250, 230],
          borderColor: "#00cc99",
          backgroundColor: "rgba(0, 204, 153, 0.1)",
          borderWidth: 3,
          tension: 0.4,
          pointRadius: 5,
          pointHoverRadius: 7,
        },
        {
          label: "NBI",
          data: [800, 950, 1100, 1050, 1200],
          borderColor: "#9933ff",
          backgroundColor: "rgba(153, 51, 255, 0.1)",
          borderWidth: 3,
          tension: 0.4,
          pointRadius: 5,
          pointHoverRadius: 7,
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            usePointStyle: true,
            boxWidth: 12,
            font: {
              size: 14
            },
            padding: 20
          }
        },
        title: {
          display: true,
          text: "TOTAL CYBERCRIME CASES",
          font: {
            size: 22,
            weight: 'bold'
          },
          color: "#333",
          padding: {
            top: 10,
            bottom: 20
          }
        },
        tooltip: {
          backgroundColor: "#333",
          titleColor: "#fff",
          bodyColor: "#fff",
          callbacks: {
            label: function(context) {
              return context.dataset.label + ": " + context.parsed.y.toLocaleString();
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            font: {
              size: 13
            },
            callback: function(value) {
              return value.toLocaleString();
            }
          },
          title: {
            display: true,
            text: 'Cases Reported',
            font: {
              size: 15,
              weight: 'bold'
            }
          }
        },
        x: {
          ticks: {
            font: {
              size: 13
            }
          },
          title: {
            display: true,
            text: 'Year',
            font: {
              size: 15,
              weight: 'bold'
            }
          }
        }
      }
    }
  });
</script>

<!-- DICT Cybercrime Chart Section -->
<section id="dict-chart" class="section mt-5">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h4 class="fw-bold">DICT</h4>
        <h5>Cybercrime Cases Over Time (2020–2025)</h5>

        <!-- Chart Container -->
        <div style="position: relative; height: 350px; margin-top: 20px;">
          <canvas id="dictLineChart"></canvas>
        </div>

        <!-- Description -->
        <div class="mt-4 text-start">
          <p><strong>2020:</strong> Approximately 10,000</p>
          <p><strong>2021:</strong> Approximately 12,000</p>
          <p><strong>2022:</strong> Approximately 15,000</p>
          <p><strong>2023:</strong> Approximately 19,000</p>
          <p><strong>2024:</strong> Approximately 23,000</p>
          <p><strong>2025:</strong> Approximately 28,000</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Script for DICT -->
<script>
  const dictCtx = document.getElementById('dictLineChart').getContext('2d');
  const dictLineChart = new Chart(dictCtx, {
    type: 'line',
    data: {
      labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
      datasets: [{
        label: 'Number of Cybercrime Cases',
        data: [10000, 12000, 15000, 19000, 23000, 28000],
        fill: false,
        borderColor: '#007bff',
        backgroundColor: '#007bff',
        tension: 0.3,
        pointRadius: 5,
        pointHoverRadius: 7
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Number of Cybercrime Cases'
          },
          ticks: {
            callback: function(value) {
              return value.toLocaleString();
            }
          }
        },
        x: {
          title: {
            display: true,
            text: 'Year'
          }
        }
      }
    }
  });
</script>
<!-- DOJ Cybercrime Chart Section -->
<section id="doj-chart" class="section mt-5">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h4 class="fw-bold">DOJ Cybercrime Cases (2020–2025)</h4>

        <!-- Chart Container -->
        <div style="position: relative; height: 350px; margin-top: 20px;">
          <canvas id="dojLineChart"></canvas>
        </div>

        <!-- Description -->
        <div class="mt-4 text-start">
          <p><strong>2020:</strong> The number of DOJ cybercrime cases started at approximately 1,500.</p>
          <p><strong>2021:</strong> There was an increase to approximately 1,800 cases.</p>
          <p><strong>2022:</strong> The number of cases saw a significant jump to around 2,200.</p>
          <p><strong>2023:</strong> Interestingly, there was a decrease in cases to approximately 2,000.</p>
          <p><strong>2024:</strong> The trend reversed again with a substantial increase to roughly 2,500 cases.</p>
          <p><strong>2025:</strong> Cases peaked at around 2,800.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Script for DOJ -->
<script>
  const dojCtx = document.getElementById('dojLineChart').getContext('2d');
  const dojLineChart = new Chart(dojCtx, {
    type: 'line',
    data: {
      labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
      datasets: [{
        label: 'Number of Cases',
        data: [1500, 1800, 2200, 2000, 2500, 2800],
        fill: false,
        borderColor: '#28a745',
        backgroundColor: '#28a745',
        tension: 0.3,
        pointRadius: 5,
        pointHoverRadius: 7
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Number of Cases'
          },
          ticks: {
            callback: function(value) {
              return value.toLocaleString();
            }
          }
        },
        x: {
          title: {
            display: true,
            text: 'Year'
          }
        }
      }
    }
  });
</script>
<section id="npc-chart" class="section mt-5">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h4 class="fw-bold">NPC Cybercrime Cases (2020–2025)</h4>

        <!-- Chart Container -->
        <div style="position: relative; height: 350px; margin-top: 20px;">
          <canvas id="npcLineChart"></canvas>
        </div>

        <!-- Description -->
        <div class="mt-4 text-start">
          <p><strong>2020:</strong> The number of cybercrime cases handled by the NPC started at approximately 150.</p>
          <p><strong>2021:</strong> There was a significant increase to around 200 cases.</p>
          <p><strong>2022:</strong> The number of cases saw a decrease to approximately 180.</p>
          <p><strong>2023:</strong> A substantial increase occurred, with the number of cases rising to around 250.</p>
          <p><strong>2024:</strong> There was a decrease to approximately 230 cases.</p>
          <p><strong>2025:</strong> Cases peaked at approximately 300.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Script for NPC -->
<script>
  const npcCtx = document.getElementById('npcLineChart').getContext('2d');
  new Chart(npcCtx, {
    type: 'line',
    data: {
      labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
      datasets: [{
        label: 'Cases',
        data: [150, 200, 180, 250, 230, 300],
        fill: false,
        borderColor: '#007bff',
        backgroundColor: '#007bff',
        tension: 0.3,
        pointRadius: 5,
        pointHoverRadius: 7
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: false,
          title: {
            display: true,
            text: 'Cases'
          },
          ticks: {
            callback: value => value.toLocaleString()
          }
        },
        x: {
          title: {
            display: true,
            text: 'Year'
          }
        }
      }
    }
  });
</script>


<!-- Include Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Your NPC Chart Section -->
<!-- Dashboard Metrics Section -->
<section id="dashboard" class="section">
  <div class="container" data-aos="fade-up">
    <h2 class="mb-4">Dashboard Metrics</h2>

    <!-- Cybercrime Cases Bar Chart -->
    <div class="mb-5" style="max-width: 800px; margin: auto;">
      <h5>Cybercrime Cases by Type (Bar Chart)</h5>
      <canvas id="cybercrimeBarChart" height="250"></canvas>
    </div>

    <!-- Cybercrime Cases Pie Chart -->
    <div class="mb-5" style="max-width: 600px; margin: auto;">
      <h5>Cybercrime Cases by Type (Pie Chart)</h5>
      <canvas id="cybercrimePieChart" height="250"></canvas>
    </div>

    <!-- Privacy Complaint Statistics -->
    <div style="max-width: 800px; margin: auto;">
      <h5>Privacy Complaint Statistics</h5>
      <canvas id="privacyComplaintChart" height="250"></canvas>
    </div>
  </div>
</section>


<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Data for both charts
  const labels = ["Phishing", "Ransomware", "Data Breach", "Identity Theft", "Malware", "BEC/Email Fraud", "Online Scams"];
  const data = [35, 20, 15, 10, 8, 7, 5];

  // Bar Chart for Cybercrime
  new Chart(document.getElementById('cybercrimeBarChart'), {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Percentage of Cases',
        data: data,
        backgroundColor: 'rgba(54, 162, 235, 0.7)'
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      plugins: {
        legend: { display: false },
        title: { display: true, text: 'Illustrative Cybercrime Cases by Type (Based on Trends)' }
      }
    }
  });

  // Pie Chart for Cybercrime
  new Chart(document.getElementById('cybercrimePieChart'), {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        data: data,
        backgroundColor: [
          '#4e79a7', '#f28e2c', '#e15759', '#76b7b2', '#59a14f', '#edc949', '#af7aa1'
        ]
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: { display: true, text: 'Illustrative Cybercrime Cases by Type (Based on Trends)' }
      }
    }
  });

  // Privacy Complaint Chart
  new Chart(document.getElementById('privacyComplaintChart'), {
    type: 'bar',
    data: {
      labels: ["Data Access Requests", "Data Correction Requests", "Data Security Concerns", "Marketing Preferences", "Objection to Processing", "Other"],
      datasets: [{
        label: 'Number of Complaints',
        data: [160, 130, 110, 90, 70, 50],
        backgroundColor: 'rgba(255, 99, 132, 0.6)'
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      plugins: {
        title: { display: true, text: 'Illustrative Privacy Complaint Statistics' }
      }
    }
  });
</script>



<!-- Image Links Section -->
<section class="container my-5" data-aos="fade-up">
  <div class="row text-center">
    <div class="col-md-3 col-6 mb-4">
      <a href="https://dict.gov.ph">
        <img src="assets/img/DICT1.webp" class="img-fluid rounded shadow fixed-img" alt="Image 1">
      </a>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <a href="https://doj.gov.ph">
        <img src="assets/img/DOJ.jpg" class="img-fluid rounded shadow fixed-img" alt="Image 2">
      </a>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <a href="https://nbi.gov.ph">
        <img src="assets/img/NBI.jpg" class="img-fluid rounded shadow fixed-img" alt="Image 3">
      </a>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <a href="https://privacy.gov.ph">
        <img src="assets/img/npc2.jpg" class="img-fluid rounded shadow fixed-img" alt="Image 4">
      </a>
    </div>
  </div>
</section>
<style>
  .fixed-img {
    width: 300px;
    height: 300px; /* Set your desired height */
    object-fit: cover;
  }
</style>



    

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>