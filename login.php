<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>M-Motors</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.min.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg border-bottom bg-white fixed-top border-body p-2"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="src/mmotors.png" alt="M-motors Logo" class="logo-img" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
              <a class="nav-link text-dark" href="sell.php"
                >Sell Your Motorcycle</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Who We Are</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contact.php">Contacts</a>
            </li>
          </ul>
          <!-- Icons -->
          <a class="nav-link me-3" href="login.php"
            ><i class="bi bi-person text-dark"></i
          ></a>
          <a class="nav-link" href="#"><i class="bi bi-cart2 text-dark"></i></a>
        </div>
      </div>
    </nav>
<!-- Main content -->
<div class="container-fluid min-vh-100 d-flex flex-column align-items-center">
    <div class="heroo">
      <div class="row justify-content-start mb-4 mt-5">
        <h1 class="mb-4">Your Account</h1>
        <div class="col-12 col-md-10">
          <h3 class="mt-4 mb-4">Login</h3>
          <div class="card">
            <div class="card-body">
              <form action="#" class="row g-3">
                <div class="col-12">
                  <label for="inputUsername" class="form-label">
                    Username or email address
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputUsername"
                    name="username"
                    placeholder="Patrick Maina"
                    required
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <div class="position-relative">
                    <input
                      type="password"
                      class="form-control"
                      id="inputPassword"
                      name="password"
                      placeholder="*********"
                      required
                    />
                    <i
                      class="bi bi-eye position-absolute"
                      id="passwordIcon"
                      style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                    ></i>
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <button type="submit" class="btn btn-dark shadow">
                    Submit
                  </button>
                </div>
                <div class="col-12 mb-4">
                  <a href="lostpass.php" class="text-muted link-offset-2 link-offset-3-hover link-underline-secondary link-underline-opacity-0 link-underline-opacity-75-hover">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add script to toggle password visibility -->
  <script>
    const passwordIcon = document.querySelector("#passwordIcon");
    const passwordInput = document.querySelector("#inputPassword");
  
    passwordIcon.addEventListener("click", function () {
      const type =
        passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
  
      // Toggle icon class
      this.classList.toggle("bi-eye");
      this.classList.toggle("bi-eye-slash");
    });
  </script>
  
    <!-- Footer Section -->
    <div class="container-fluid mt-4">
      <footer class="bg-light text-dark">
        <div class="container">
          <div class="row justify-content-center">
            <!-- Column 1: About M-Motors -->
            <div class="col-12 col-md-4 mb-3 d-flex flex-column">
              <h5>About M-Motors</h5>
              <p>
                M-Motors is your trusted motorcycle dealership in Kenya,
                offering a wide range of locally sourced and international
                motorcycles with a focus on safety, transparency, and customer
                satisfaction.
              </p>
            </div>

            <!-- Column 2: Stay Up to Date with Social Media Links -->
            <div class="col-12 col-md-4 mb-3 d-flex flex-column">
              <h5>Follow Us</h5>
              <div class="mb-5">
                <a href="#" class="text-dark me-3"
                  ><i class="bi bi-twitter"></i
                ></a>
                <a href="#" class="text-dark me-3"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="#" class="text-dark me-3"
                  ><i class="bi bi-tiktok"></i
                ></a>
                <a href="#" class="text-dark me-3"
                  ><i class="bi bi-youtube"></i
                ></a>
              </div>

              <h5>Stay Up to Date</h5>
              <p>
                Subscribe to get the latest updates on new arrivals, offers, and
                more.
              </p>
              <form class="d-flex">
                <input
                  type="email"
                  class="form-control me-2"
                  placeholder="Your email address"
                  aria-label="Email address"
                />
                <button type="submit" class="btn btn-dark">Subscribe</button>
              </form>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="col-12 col-md-4 mb-3 d-flex flex-column">
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
        <div class="row text-center mt-3">
          <div class="col-12">
            <p class="mb-0">&copy; 2024 M-Motors. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
