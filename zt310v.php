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

<!-- Custom CSS -->
<style>
    .list-group-item span {
        flex: 1;
    }
</style>

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
          <a class="nav-link me-3" href="#"
            ><i class="bi bi-person text-dark"></i
          ></a>
          <a class="nav-link" href="#"><i class="bi bi-cart2 text-dark"></i></a>
        </div>
      </div>
    </nav>

    <!-- Main content -->
    <div class="container-fluid mt-5">
      <div class="row mb-4 mt-4">
        <div class="col-12 col-md-6 mt-3">
          <nav
            style="
              --bs-breadcrumb-divider: url(
                &#34;data:image/svg + xml,
                %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
              );
            "
            aria-label="breadcrumb"
          >
            <ol class="breadcrumb bg-white mt-4">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="allbikes.php">Motorcycles</a>
              </li>
              <li class="breadcrumb-item"><a href="zontes.php">Zontes</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Zontes ZT310V
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Motorcycle Image -->
        <div class="col-12 col-md-5 mb-4 rounded-2 me-4">
          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/asset 17.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 1"
                  data-bs-toggle="modal"
                  data-bs-target="#imageModal"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/asset 16.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 2"
                  data-bs-toggle="modal"
                  data-bs-target="#imageModal"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/asset 15.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 3"
                  data-bs-toggle="modal"
                  data-bs-target="#imageModal"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleFade"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
        </div>

        <!-- Motorcycle Details -->
        <div class="col-12 col-md-5 mb-4">
          <h3 class="fw-bold mb-2 display-6">Zontes ZT310V</h3>
          <h4 class="mb-2 fw-bold">KES 400,000</h4>
          <div class="text-secondary">
            <hr/>
          </div>
          <p class="fw-light text-pretty">
            The 310 is powered by Zontes 312cc fuel-injected engine. Mated to a
            6-speed sequential transmission sending power to the rear wheel via
            a chain drive, the combo is good for 25kW and 30Nm and a capable top
            speed of 170km an hour if you were pressed to find out. The beauty
            of this machine is that under normal operating conditions you can
            expect to get 3.2l/100km from the 15l fuel tank.
          </p>
          <div class="d-grid justify-content-start p-2">
            <a class="link-offset-3 link-underline-dark text-dark fw-medium link-underline-opacity-100" href="#">
                Running Costs
              </a>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-start p-2">
            <button class="btn btn-success btn-sm">
              <i class="bi bi-whatsapp" style="width: 20px"></i>
              Enquire on Whatsapp
            </button>
            <button class="btn btn-outline-dark btn-sm">
              <i class="bi bi-telephone" style="width: 20px"></i>
              Call Now
            </button>
          </div>
           <!-- Modal for Full-Screen Image View -->
    <div
    class="modal fade"
    id="imageModal"
    tabindex="-1"
    aria-labelledby="imageModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div id="fullscreenCarousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="images/asset 17.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/asset 16.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="images/asset 15.png"
                  class="d-block w-100"
                  alt="Motorcycle Image 3"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#fullscreenCarousel"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#fullscreenCarousel"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Specifications Card -->
<div class="card mb-4 border-0 p-2">
    <h4 class="card-title mt-4">Specifications</h4>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Engine:</span>
            <span class="fw-light">312cc</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Transmission:</span>
            <span class="fw-light">6-Speed Sequential</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Power:</span>
            <span class="fw-light">25kW</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Torque:</span>
            <span class="fw-light">30Nm</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Top Speed:</span>
            <span class="fw-light">170 km/h</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Fuel Consumption:</span>
            <span class="fw-light">3.2l/100km</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Fuel Tank Capacity:</span>
            <span class="fw-light">15l</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Weight:</span>
            <span class="fw-light">165 kg</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">0-100 km/h Acceleration:</span>
            <span class="fw-light">8.5 seconds</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Tire Size:</span>
            <span class="fw-light">120/70 R17 (Front), 160/60 R17 (Rear)</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Brake Type:</span>
            <span class="fw-light">Disc Brakes</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Clutch Type:</span>
            <span class="fw-light">Wet Multi-Plate</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fw-bold">Key System:</span>
            <span class="fw-light">Electronic Key</span>
        </li>
    </ul>
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
              <form class="d-flex justify-content-center">
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
            <div class="col-12 col-md-4 mb-3">
              <h5>Quick Links</h5>
              <ul class="list-unstyled footerlink">
                <li><a href="index.php">Home</a></li>
                <li><a href="allbikes.php">Motorcycles</a></li>
                <li><a href="sell.php">Sell Your Motorcycle</a></li>
                <li><a href="#">Contact Us</a></li>
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
