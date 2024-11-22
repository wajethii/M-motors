<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

include ('headeradmin.php');

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
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top p-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
          <a class="navbar-brand" href="index.php">
            <img src="../src/mmotors.png" alt="M-motors Logo" class="logo-img" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-bell text-dark"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Page Content -->
       <!-- Page Content -->
       <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-12">
                <h2 class="mt-4 text-start">Welcome back,</h2>
                </div>
            </div>
            <div class="row gap-2">
                <div class="col-12 col-md-3">
                    <div class="card rounded-2 border-end">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card rounded-2 border-end">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card rounded-2 border-end">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
    
        
  </div>