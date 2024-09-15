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
    <nav class="navbar navbar-expand-lg border-bottom bg-white fixed-top border-body p-2">
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
              <a class="nav-link text-dark" href="sell.php">Sell Your Motorcycle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Who We Are</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Contacts</a>
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
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb"> 
                <ol class="breadcrumb bg-white">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="allbikes.php">Motorcycles</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Yamaha</li>
                </ol>
              </nav>
            </div>
        </div>
      <div class="row mt-4 mb-4">
        <!-- Filter/Search Column -->
        <div class="col-12 col-md-4 col-lg-3 mb-4 mt-1">
          <h5>Filter by Budget</h5>
          <select class="form-select mb-3">
            <option selected>Select Budget</option>
            <option value="1">Below KES 100,000</option>
            <option value="2">KES 100,000 - 200,000</option>
            <option value="3">KES 200,000 - 300,000</option>
            <option value="4">KES 300,000 - 400,000</option>
            <option value="5">KES 400,000 - 500,000</option>
            <option value="6">KES 500,000 - 600,000</option>
            <option value="7">KES 600,000 - 700,000</option>
            <option value="8">KES 700,000 - 800,000</option>
            <option value="9">KES 800,000 - 900,000</option>
            <option value="10">Above 1 Million</option>
          </select>

          <h5>Search Motorcycle</h5>
          <input
            type="text"
            class="form-control mb-3"
            placeholder="Search by model, make..."
          />
        </div>

        <!-- Motorcycle Card 1 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 91.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard.
                </p>

                <!-- Bike Details -->
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2022</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1200cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>

                <!-- Price -->
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 5,000,000
                </p>

                <!-- Location -->
                <p class="card-location text-muted mb-0">Nairobi, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 2 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 92.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Yamaha MT-07
                </h4>
                <p class="card-text text-truncate">
                  The Yamaha MT-07 delivers a thrilling experience with great
                  performance, handling, and value.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2021</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>900cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>500kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 3,500,000
                </p>
                <p class="card-location text-muted mb-0">Mombasa, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 3 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 93.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Kawasaki Ninja H2
                </h4>
                <p class="card-text text-truncate">
                  The Kawasaki Ninja H2 is a high-performance sportbike that is
                  known for its raw speed and exceptional handling.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2020</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1000cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>600kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 6,000,000
                </p>
                <p class="card-location text-muted mb-0">Nakuru, Kenya</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-4 mb-4">
        <!-- Motorcycle Card 1 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 93.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Kawasaki Ninja H2
                </h4>
                <p class="card-text text-truncate">
                  The Kawasaki Ninja H2 is a high-performance sportbike that is
                  known for its raw speed and exceptional handling.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2020</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1000cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>600kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 6,000,000
                </p>
                <p class="card-location text-muted mb-0">Nakuru, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 2 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 91.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard.
                </p>

                <!-- Bike Details -->
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2022</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1200cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>

                <!-- Price -->
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 5,000,000
                </p>

                <!-- Location -->
                <p class="card-location text-muted mb-0">Nairobi, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 3 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 92.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Yamaha MT-07
                </h4>
                <p class="card-text text-truncate">
                  The Yamaha MT-07 delivers a thrilling experience with great
                  performance, handling, and value.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2021</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>900cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>500kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 3,500,000
                </p>
                <p class="card-location text-muted mb-0">Mombasa, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 4 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 93.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Kawasaki Ninja H2
                </h4>
                <p class="card-text text-truncate">
                  The Kawasaki Ninja H2 is a high-performance sportbike that is
                  known for its raw speed and exceptional handling.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2020</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1000cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>600kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 6,000,000
                </p>
                <p class="card-location text-muted mb-0">Nakuru, Kenya</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-4 mb-4">
        <!-- Motorcycle Card 1 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 93.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Kawasaki Ninja H2
                </h4>
                <p class="card-text text-truncate">
                  The Kawasaki Ninja H2 is a high-performance sportbike that is
                  known for its raw speed and exceptional handling.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2020</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1000cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>600kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 6,000,000
                </p>
                <p class="card-location text-muted mb-0">Nakuru, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 2 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 91.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard.
                </p>

                <!-- Bike Details -->
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2022</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1200cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>

                <!-- Price -->
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 5,000,000
                </p>

                <!-- Location -->
                <p class="card-location text-muted mb-0">Nairobi, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 3 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 92.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Yamaha MT-07
                </h4>
                <p class="card-text text-truncate">
                  The Yamaha MT-07 delivers a thrilling experience with great
                  performance, handling, and value.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white p-1 rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2021</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>900cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>500kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 3,500,000
                </p>
                <p class="card-location text-muted mb-0">Mombasa, Kenya</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Motorcycle Card 4 -->
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 93.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Kawasaki Ninja H2
                </h4>
                <p class="card-text text-truncate">
                  The Kawasaki Ninja H2 is a high-performance sportbike that is
                  known for its raw speed and exceptional handling.
                </p>
                <ul
                  class="list-unstyled d-flex flex-wrap justify-content-start gap-2 bg-white rounded"
                >
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>2020</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>1000cc</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>600kg</small>
                  </li>
                  <li class="text-wrap text-bg-light p-2 rounded fw-medium">
                    <small>Kenyan Used</small>
                  </li>
                </ul>
                <p class="card-price text-success fw-bold mt-2 mb-0">
                  KES 6,000,000
                </p>
                <p class="card-location text-muted mb-0">Nakuru, Kenya</p>
              </div>
            </div>
          </a>
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
                <p>
                  M-Motors is your trusted motorcycle dealership in Kenya,
                
                </p>
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
                  <input
                    type="email"
                    class="form-control me-2"
                    placeholder="Your email address"
                    aria-label="Email address"
                  />
                  <button type="submit" class="btn btn-dark">
                    Subscribe
                  </button>
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
      

    <!-- WhatsApp Chat Button -->
    <a
      href="https://wa.me/254700000000"
      target="_blank"
      id="whatsapp-chat"
      class="btn btn-success d-flex justify-content-center align-items-center rounded-circle position-fixed bottom-0 end-0 m-3"
      style="display: block; font-size: 24px; width: 48px; height: 48px"
    >
      <i class="bi bi-whatsapp"></i>
    </a>

    <!-- WhatsApp Chat Icon Script (Optional for toggle visibility based on scroll) -->
    <script>
      // Optionally hide the button when not needed
      window.onscroll = function () {
        var whatsappButton = document.getElementById("whatsapp-chat");
        if (
          document.body.scrollTop > 100 ||
          document.documentElement.scrollTop > 100
        ) {
          whatsappButton.style.display = "block";
        } else {
          whatsappButton.style.display = "block"; // You can hide if needed
        }
      };
    </script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
