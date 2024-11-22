<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>M-Motors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="styles.min.css" />

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg border-bottom bg-white fixed-top border-body p-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="src/mmotors.png" alt="M-motors Logo" class="logo-img" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Motorcycles
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="allbikes.php">All</a></li>
              <li>
                <a class="dropdown-item" href="#">Available in Kenya</a>
              </li>
              <li><a class="dropdown-item" href="#">Direct Import</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="sell.php">Sell Your Motorcycle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="about.php">Who We Are</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-dark" href="contact.php">Contacts</a>
          </li>
        </ul>
        <!-- Icons -->
        <a class="nav-link" href="#"><i class="bi bi-cart2 text-dark"></i></a>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="container-fluid mt-5 mb-4 min-vh-100 position-relative align-items-center">
    <div class="row mb-4 mt-4 justify-content-center position-relative" style="z-index: 1;">

      <!-- Contact Form -->
      <div class="col-12 col-md-4 mt-5">
        <div class="card p-4 bg-white rounded-3">
          <h5 class="mb-4">WE’D LIKE TO HEAR FROM YOU</h5>

        <!-- Contact form -->
        <form action="subcontact.php" method="POST" class="row g-3">
            <div class="col-12">
              <label for="inputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputName" name="name" placeholder="John Maina" required>
            </div>
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@example.com" required>
            </div>
            <div class="col-12">
              <label for="inputPhone" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="0700000000" pattern="\d{10,15}">
            </div>
            <div class="col-12 mb-4">
              <label for="inputMessage" class="form-label">Message</label>
              <textarea class="form-control" id="inputMessage" name="message"></textarea>
            </div>
            <div class="col-12 mb-4">
              <button type="submit" name="contact_btn" class="btn btn-secondary shadow">Submit</button>
            </div>
          </form>
    </div>
</div>


      <!-- Information Card -->
      <div class="col-12 col-md-3 mt-5">
        <div class="card rounded-3 justify-content-center bg-white">
          <h5 class="p-4 fw-light">
            For further information or enquiries do reach out to us.
          </h5>

          <!-- Location -->
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <i class="bi bi-geo-alt p-2 text-secondary" style="width: 48px; height: 48px;"></i>
            </div>
            <div class="col">
              <div class="card-body text-dark">
                <a href="#" class="text-decoration-none text-dark">
                  <h6 class="card-title fw-medium">M-MOTORS LTD</h6>
                  <p class="card-text fw-light">Thika Plaza, Thika. Kenya</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Mobile Number -->
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <i class="bi bi-phone p-2 text-secondary" style="width: 48px; height: 48px;"></i>
            </div>
            <div class="col">
              <div class="card-body text-dark">
                <a href="tel:+254712345678" class="text-decoration-none text-dark">
                  <h6 class="card-title fw-medium">CALL</h6>
                  <p class="card-text fw-light">+254 712 345 678</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Fax -->
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <i class="bi bi-printer p-2 text-secondary" style="width: 48px; height: 48px;"></i>
            </div>
            <div class="col">
              <div class="card-body text-dark">
                <a href="fax:+25412345678" class="text-decoration-none text-dark">
                  <h6 class="card-title fw-medium">FAX</h6>
                  <p class="card-text fw-light">+254 123 456 78</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Email -->
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <i class="bi bi-envelope p-2 text-secondary" style="width: 48px; height: 48px;"></i>
            </div>
            <div class="col">
              <div class="card-body text-dark">
                <a href="mailto:info@m-motors.com" class="text-decoration-none text-dark">
                  <h6 class="card-title fw-medium">EMAIL</h6>
                  <p class="card-text fw-light">info@m-motors.com</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="container-fluid mt-4">
    <footer class="bg-light text-dark">
      <div class="container-fluid">
        <div class="row justify-content-center text-center">
          <!-- Column 1: About M-Motors -->
          <div class="col-12 col-md-4 mb-3">
            <h5>About M-Motors</h5>
            <p>M-Motors is your trusted motorcycle dealership in Kenya,</p>
          </div>

          <!-- Column 2: Stay Up to Date with Social Media Links -->
          <div class="col-12 col-md-4 mb-3">
            <h5>Follow Us</h5>
            <div class="mb-4">
              <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
              <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
              <a href="#" class="text-dark me-3"><i class="bi bi-tiktok"></i></a>
              <a href="#" class="text-dark me-3"><i class="bi bi-youtube"></i></a>
            </div>

            <h5>Stay Up to Date</h5>
            <p>
              Subscribe to get the latest updates on new arrivals, offers, and
              more.
            </p>
            <form class="d-flex justify-content-center">
              <input type="email" class="form-control me-2" placeholder="Your email address"
                aria-label="Email address" />
              <button type="submit" class="btn btn-dark shadow">Subscribe</button>
            </form>
          </div>

          <!-- Column 3: Quick Links -->
          <div class="col-12 col-md-4 mb-3">
            <h5>Quick Links</h5>
            <ul class="list-unstyled footerlink">
              <li><a href="index.php">Home</a></li>
              <li><a href="allbikes.php">Motorcycles</a></li>
              <li><a href="sell.php">Sell Your Motorcycle</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Copyright Section -->
      <div class="container text-center mt-3">
        <p class="mb-0">&copy; 2024 M-Motors. All rights reserved.</p>
      </div>
    </footer>
  </div>

  <!-- Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>