<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

include ('headeradmin.php');
include 'admincon.php';

// Check for success flag in the query string
$successMessage = '';
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = "The motorcycle and its images were successfully added!";
}
?>
 
  <div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-lg-2 d-none d-lg-block border-end vh-100 position-fixed" style="top: 56px;">
  <ul class="nav flex-column p-3">
    <li class="nav-item">
      <a class="nav-link" href="index.php"><i class="bi bi-house me-2"></i>Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="addbike.php"><i class="bi bi-tags me-2"></i>Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="bi bi-chat-square-text me-2"></i>Messages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="bi bi-graph-up-arrow me-2"></i>Analytics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Log Out</a>
    </li>
  </ul>
</nav>
<!-- Offcanvas Mobile Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileOffcanvasMenu" aria-labelledby="mobileOffcanvasMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileOffcanvasMenuLabel"><i class="bi bi-list me-2"></i>Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="bi bi-house me-2"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addbike.php"><i class="bi bi-tags me-2"></i>Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-chat-square-text me-2"></i>Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-graph-up-arrow me-2"></i>Analytics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Log Out</a>
            </li>
        </ul>
    </div>
</div>

    <!-- Main Content -->
    <div class="col-lg-10 offset-lg-2">
      <!-- Page Content -->
      <div class="container mt-5 pt-4">
        <div class="d-flex align-items-center justify-content-between">
          <h2 class="mt-4">Motorcycles</h2>
          <button class="btn btn-dark" data-bs-toggle="offcanvas" data-bs-target="#addMotorcycleForm">Add Motorcycle</button>
        </div>
        <!-- Display success message -->
        <?php if ($successMessage): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
<!-- Offcanvas for Adding a Motorcycle -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addMotorcycleForm" aria-labelledby="addMotorcycleFormLabel">
    <div class="offcanvas-header">
        <h5 id="addMotorcycleFormLabel">Add New Motorcycle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form id="motorcycleForm" method="POST" action="_bike.php" enctype="multipart/form-data">
            <!-- Asali -->
            <div style="position: absolute; left: -9999px; visibility: hidden;">
                <label for="extrainfo">_</label>
                <input type="text" id="extrainfo" name="extrainfo">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Motorcycle Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">Please provide the motorcycle name.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="">Select Type</option>
                            <option value="imported">Imported</option>
                            <option value="showroom">In Showroom</option>
                            <option value="selling_on_behalf">Selling on Behalf</option>
                        </select>
                        <div class="invalid-feedback">Please select the motorcycle type.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                        <div class="invalid-feedback">Please provide the price.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="">Select Status</option>
                            <option value="in_showroom">In Showroom</option>
                            <option value="selling_on_behalf">Selling on Behalf</option>
                        </select>
                        <div class="invalid-feedback">Please select the status.</div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <!--Specifications -->
         
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="engine_size" class="form-label">Engine Size</label>
                        <input type="number" class="form-control" id="engine_size" name="engine_size" required>
                        <div class="invalid-feedback">Please provide the engine size.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="transmission" class="form-label">Transmission</label>
                        <input type="text" class="form-control" id="transmission" name="transmission" required>
                        <div class="invalid-feedback">Please provide the transmission type.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="top_speed" class="form-label">Top Speed</label>
                        <input type="number" class="form-control" id="top_speed" name="top_speed" required>
                        <div class="invalid-feedback">Please provide the top speed.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="power" class="form-label">Power</label>
                        <input type="number" class="form-control" id="power" name="power" required>
                        <div class="invalid-feedback">Please provide the power.</div>
                    </div>
                </div>
            </div>

            <!--Images -->
           
                <div class="mb-3">
                    <label for="images" class="form-label">Upload Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple required>
                    <div class="invalid-feedback">Please upload at least one image.</div>
                </div>
       

            <!-- Navigation Buttons -->
            <div>
                <button type="submit" class="btn btn-dark" id="submitForm">Save</button>
            </div>
                </div>
            </div>

            
        </form>
</div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
