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
  <body class="bg-light">
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
                <li><a class="dropdown-item" href="#">All</a></li>
                <li>
                  <a class="dropdown-item" href="#">Available in Kenya</a>
                </li>
                <li><a class="dropdown-item" href="#">Direct Import</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-dark" href="#"
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
 <div class="container-fluid mt-5 min-vh-100">
    <div class="row mb-4 mt-4 row-gap-3 justify-content-center">
      <div class="col-12 col-md-3 mt-5">
        <div id="card1" class="card border-0 shadow justify-content-center step-card" data-step="1">
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <h4 class="text-wrap text-bg-success rounded-circle p-3 text-white d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">1</h4>
            </div>
            <div class="col">
              <div class="card-body text-success p-4">
                <h5 class="card-title">Motorcycle Details</h5>
                <p class="card-text">Tell us about your motorcycle</p>
              </div>
            </div>
          </div>
        </div>

        <div id="card2" class="card border-0 justify-content-center mt-3 step-card" data-step="2">
          <div class="row align-items-center">
            <div class="col-auto p-4 text-center">
              <h4 class="text-wrap text-bg-secondary rounded-circle p-3 text-white d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">2</h4>
            </div>
            <div class="col">
              <div class="card-body text-secondary p-4">
                <h5 class="card-title">Contact Details</h5>
                <p class="card-text">Let us know how to reach you</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 1: Motorcycle Details -->
      <div id="step1" class="col-12 col-md-4 mt-5">
        <div class="card shadow p-4 border-0">
          <h5 class="mb-4">Motorcycle Details</h5>
          <form id="multistepFormStep1" class="row g-3">
            <!-- Form fields here -->
            <div class="col-12">
                <label for="inputRegistration" class="form-label">Registration Number</label>
                <input type="text" class="form-control" id="inputRegistration" name="registration_number" placeholder="KCQM 12ER">
              </div>
              <div class="col-md-6">
                <label for="inputMake" class="form-label">Make</label>
                <select id="inputMake" name="make" class="form-select">
                  <option selected>Select</option>
                  <option>Yamaha</option>
                  <option>Kawasaki</option>
                  <option>Suzuki</option>
                  <option>Honda</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputCc" class="form-label">Engine Size</label>
                <input type="text" class="form-control" id="inputCc" name="engine_size" placeholder="1200cc">
              </div>
              <div class="col-12">
                <label for="inputAspiration" class="form-label">Aspiration</label>
                <input type="text" class="form-control" id="inputAspiration" name="aspiration" placeholder="Natural">
              </div>
              <div class="col-12">
                <label for="inputWeight" class="form-label">Weight in Kg</label>
                <input type="text" class="form-control" id="inputWeight" name="weight" placeholder="1680kg">
              </div>
              <div class="col-12">
                <label for="inputYear" class="form-label">Year of Manufacture</label>
                <select id="inputYear" name="year" class="form-select">
                  <option selected>Select</option>
                  <option>1980</option>
                  <option>1990</option>
                  <option>2000</option>
                  <option>2010</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputMileage" class="form-label">Mileage</label>
                <input type="text" class="form-control" id="inputMileage" name="mileage" placeholder="1,000">
              </div>
              <div class="col-md-6">
                <label for="inputMileageUnit" class="form-label">Mileage Unit</label>
                <select id="inputMileageUnit" name="mileage_unit" class="form-select">
                  <option selected>Select</option>
                  <option>Miles</option>
                  <option>KM</option>
                </select>
              </div>
              <div class="col-12">
                <label for="inputAccidentHistory" class="form-label">Accident History</label>
                <select id="inputAccidentHistory" name="accident_history" class="form-select">
                  <option selected>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
              <div class="col-12">
                <label for="inputPrice" class="form-label">Asking Price</label>
                <input type="text" class="form-control" id="inputPrice" name="price">
              </div>
              <div class="col-12">
                <label for="inputLocation" class="form-label">Location</label>
                <select id="inputLocation" name="location" class="form-select">
                  <option selected>Select</option>
                  <option>Kiambu</option>
                  <option>Nairobi</option>
                  <option>Machakos</option>
                  <option>Murang'a</option>
                  <option>Nakuru</option>
                  <option>Kirinyaga</option>
                </select>
              </div>
            <div class="col-12">
              <button type="button" class="btn btn-dark shadow" id="nextButtonStep1">Next</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Step 2: Contact Details and Image Upload -->
      <div id="step2" class="col-12 col-md-4 mt-5" style="display: none;">
        <div class="card shadow p-4 border-0">
          <h5 class="mb-4">Contact Details & Images</h5>
          <form id="multistepFormStep2" class="row g-3">
            <div class="col-12">
              <label for="inputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputName" name="name" placeholder="John Doe">
            </div>
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@example.com">
            </div>
            <div class="col-12">
              <label for="inputPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="0700000000">
            </div>
            <div class="col-12">
              <label for="inputImages" class="form-label">Images of the Motorcycle (max 10)</label>
              <input type="file" class="form-control" id="inputImages" name="images[]" multiple>
              <div id="imageError" class="text-danger mt-2" style="display: none;">You can only select up to 10 images.</div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-dark shadow">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    // JavaScript for multistep functionality
    const nextButtonStep1 = document.getElementById('nextButtonStep1');
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const cards = document.querySelectorAll('.step-card');
  
    nextButtonStep1.addEventListener('click', function() {
      // Hide step 1 and show step 2
      step1.style.display = 'none';
      step2.style.display = 'block';
  
      // Remove active class from all cards
      cards.forEach(card => {
        card.classList.remove('border-success', 'shadow');
        card.querySelector('.card-body').classList.remove('text-success');
        card.querySelector('.card-text').classList.remove('text-success');
        card.querySelector('.text-wrap').classList.remove('text-success');
        card.querySelector('.text-wrap').classList.add('text-secondary');
      });
  
      // Add active class to step 2 card
      const step2Card = document.querySelector('[data-step="2"]');
      step2Card.classList.add('border-success', 'shadow');
      step2Card.querySelector('.card-body').classList.add('text-success');
      step2Card.querySelector('.card-text').classList.add('text-success');
      step2Card.querySelector('.text-wrap').classList.add('text-success');
      step2Card.querySelector('.text-wrap').classList.remove('text-secondary');
    });
  
    // JavaScript to limit image uploads to 10
    document.getElementById('inputImages').addEventListener('change', function() {
      const fileInput = this;
      const errorElement = document.getElementById('imageError');
      if (fileInput.files.length > 10) {
        errorElement.style.display = 'block';
        fileInput.value = ''; // Clear the input
      } else {
        errorElement.style.display = 'none';
      }
    });
  </script>
  
    <!-- Footer Section -->
    <div class="container-fluid mt-4">
      <footer class="bg-white">
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
                <a href="#" class="text-white me-3"
                  ><i class="bi bi-twitter"></i
                ></a>
                <a href="#" class="text-white me-3"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="#" class="text-white me-3"
                  ><i class="bi bi-tiktok"></i
                ></a>
                <a href="#" class="text-white me-3"
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
