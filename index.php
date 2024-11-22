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
          <a class="nav-link" href="#"><i class="bi bi-cart2 text-dark"></i></a>
        </div>
      </div>
    </nav>

    <!-- Main content -->
<div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center">
  <div class="heroo text-center">
    <div class="row justify-content-center align-items-center mb-4 mt-5">
      <div class="col-8 col-md-8">
        <h1 class="mb-4">
          Purchase or Sell your Motorcycle
          <span class="fw-bolder">securely</span> in Kenya with utmost
          safety.
        </h1>
      </div>
    </div>

    <!-- Buttons Section -->
    <div class="row justify-content-center gap-3 mb-4 p-2">
      <!-- Explore Motorcycles Dropdown -->
      <div class="col-12 col-md-3">
        <div class="dropdown w-100">
          <button
            class="btn btn-outline-dark dropdown-toggle w-100"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Explore Motorcycles
          </button>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item" href="ducati.php">Ducati</a></li>
            <li><a class="dropdown-item" href="zontes.php">Zontes</a></li>
            <li><a class="dropdown-item" href="allbikes.php">All</a></li>
          </ul>
        </div>
      </div>

      <!-- Buy a Motorcycle Dropdown -->
      <div class="col-12 col-md-3">
        <div class="dropdown w-100">
          <button
            class="btn btn-outline-dark dropdown-toggle w-100"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Buy a Motorcycle
          </button>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item" href="#">International</a></li>
            <li><a class="dropdown-item" href="#">Locally</a></li>
          </ul>
        </div>
      </div>

      <!-- Sell a Motorcycle Button -->
      <div class="col-12 col-md-3 mb-4">
        <a href="sell.php" class="btn btn-outline-dark w-100">Sell a Motorcycle</a>
      </div>
    </div>
  </div>
  
  <!-- Image Section Wrapped in a Card with 5 Columns -->
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6"> <!-- 5 columns on medium and larger screens -->
      <div class="card border-0">
        <div class="card-body">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/asset 6.webp" class="d-block w-100 img-fluid carousel-image" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/asset 8.webp" class="d-block w-100 carousel-image" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/asset 9.webp" class="d-block w-100 carousel-image" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- Additional Section -->
    <div class="container py-5">
      <div class="row justify-content-center align-items-center mb-4">
        <div class="col-12 col-md-6">
          <h2 class="mb-3">Locally Sourced Motorcycles</h2>
          <p class="lead">
            Explore our selection of locally sourced motorcycles that offer both
            reliability and performance. Each bike is handpicked to ensure it
            meets our high standards for quality and durability. Whether you're
            looking for a daily commuter or a weekend ride, our locally sourced
            motorcycles are designed to fit your needs.
          </p>
        </div>
        <div class="col-12 col-md-6 mt-4">
          <img
            src="images/asset 92.png"
            class="img-fluid w-50"
            alt="Your perfect fit"
          />
        </div>
      </div>
      <div class="row justify-content-center align-items-center mb-4 mt-4">
        <div class="col-12 col-md-6">
          <img
            src="images/asset 92.png"
            class="img-fluid w-50"
            alt="Your perfect fit"
          />
        </div>
        <div class="col-12 col-md-6">
          <h2 class="mb-3 mt-4">International Motorcycles</h2>
          <p class="lead">
            Discover our range of international motorcycles that bring the
            latest technology and innovation from around the world. We partner
            with top brands to offer you a diverse selection of bikes, ensuring
            you have access to the best in performance and style. From
            cutting-edge designs to advanced features, our international
            motorcycles offer unmatched quality.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid mb-4">
      <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12">
          <div class="card text-dark border-0 p-4">
            <!-- Text content taking 8 columns on larger screens -->
            <div class="text-dark d-flex flex-column justify-content-center">
              <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                  <h3 class="card-title text-center fw-bold">Who We Are</h3>
                  <p class="card-text text-center">
                    M-Motors is a leading motorcycle dealership in Kenya, operating
                    as a Limited Liability Company (LLC). We specialize exclusively
                    in motorcycles, offering a streamlined experience for buyers and
                    sellers alike. At M-Motors, safety and transparency are at the
                    core of every transaction. From our detailed communication
                    process to our hassle-free purchasing methods, we make owning or
                    selling a motorcycle simple and straightforward. Whether you're
                    looking for locally sourced models or seeking an international
                    option, M-Motors ensures you receive top-notch service and
                    complete peace of mind throughout the entire process.
                  </p>
                </div>
              </div>
    
              <!-- Empowering the Community Section -->
              <div class="row mt-5 justify-content-center text-center text-dark">
                <div class="col-12 mb-4">
                  <h3 class="fw-bold text-dark">Empowering the Community</h3>
                </div>
    
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-transparent">
                    <h4 id="workers" class="fw-bold text-dark">0</h4>
                    <p class="text-dark">Workers Employed</p>
                  </div>
                </div>
    
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-transparent">
                    <h4 id="motorcycles" class="fw-bold text-dark">0</h4>
                    <p class="text-dark">Motorcycles Sold</p>
                  </div>
                </div>
    
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-transparent">
                    <h4 id="years" class="fw-bold text-dark">0</h4>
                    <p class="text-dark">Years of Experience</p>
                  </div>
                </div>
    
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-transparent">
                    <h4 id="clients" class="fw-bold text-dark">0</h4>
                    <p class="text-dark">Happy Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid p-4">
      <h2 class="card-title text-center mt-4">Hot Deals</h2>
      <p class="card-text text-center mb-4">
        We specialize exclusively in motorcycles, offering a streamlined
        experience for buyers and sellers alike.
      </p>
      <div class="row row-cols-1 row-cols-md-5 g-3">
        <div class="col">
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
                  <!-- Year of Manufacture -->
                  <!-- <span class="badge bg-secondary text-dark">2022</span> -->
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard. It’s blisteringly quick,
                  with masses of torque for easy riding.
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
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>2886km</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
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

        <div class="col">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 94.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                  <!-- Year of Manufacture -->
                  <!-- <span class="badge bg-secondary text-dark">2022</span> -->
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard. It’s blisteringly quick,
                  with masses of torque for easy riding.
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
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>2886km</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
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

        <div class="col">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 92.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                  <!-- Year of Manufacture -->
                  <!-- <span class="badge bg-secondary text-dark">2022</span> -->
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard. It’s blisteringly quick,
                  with masses of torque for easy riding.
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
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>2886km</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
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
        <div class="col">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 94.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                  <!-- Year of Manufacture -->
                  <!-- <span class="badge bg-secondary text-dark">2022</span> -->
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard. It’s blisteringly quick,
                  with masses of torque for easy riding.
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
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>2886km</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
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

        <div class="col">
          <a href="#" class="text-decoration-none">
            <div class="card border-0">
              <img
                src="images/asset 92.png"
                class="card-img-top img-fluid"
                alt="Motorcycle Image"
              />
              <div class="card-body">
                <!-- Bike Make -->
                <h4
                  class="card-title d-flex justify-content-between align-items-center mt-3"
                >
                  Ducati XDiavel S
                  <!-- Year of Manufacture -->
                  <!-- <span class="badge bg-secondary text-dark">2022</span> -->
                </h4>

                <!-- Short Description -->
                <p class="card-text text-truncate">
                  The XDiavel is a revelation for the cruiser market in terms of
                  handling prowess, available performance, and the full
                  complement of technology as standard. It’s blisteringly quick,
                  with masses of torque for easy riding.
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
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>800kg</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
                    <small>2886km</small>
                  </li>
                  <li class="text-wrap text-bg-light rounded fw-medium p-2">
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
      </div>
    </div>
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
                <li><a href="#">Contact Us</a></li>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>

    <!-- Use a non-module version of CountUp.js -->
    <script src="https://cdn.jsdelivr.net/npm/countup.js@1.9.3/dist/countUp.min.js"></script>

    <script>
      // Initialize CountUp animations for each number
      window.onload = function () {
        const options = {
          duration: 2, // Adjust animation speed
        };

        // Initialize CountUp for each number
        const workersCount = new CountUp("workers", 200, options);
        const motorcyclesCount = new CountUp("motorcycles", 50, options);
        const yearsCount = new CountUp("years", 10, options);
        const clientsCount = new CountUp("clients", 100, options);

        // Start the counters
        if (!workersCount.error) workersCount.start();
        if (!motorcyclesCount.error) motorcyclesCount.start();
        if (!yearsCount.error) yearsCount.start();
        if (!clientsCount.error) clientsCount.start();
      };
    </script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
