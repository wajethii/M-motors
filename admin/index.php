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
 <style>
    /* Sidebar styles for larger screens */
    .sidebar {
      height: 100vh;
      width: 200px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #ffff;
      border-right: 0.5px solid #dee2e6;
      z-index: 1000;
    }
    /* Main content styles */
    .main-content {
      padding: 20px;
    }
    /* Toggle button styles */
    .navbar-toggler {
      margin-left: auto;
    }
    /* Hide sidebar on mobile screens */
    @media (max-width: 991px) {
      .sidebar {
        display: none;
      }
      .main-content {
        margin-left: 0;
      }
      .navbar-collapse {
        position: absolute;
        top: 56px;
        left: 12px;
        width: 100%;
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
      }
    }
  </style>


<div class="container-fluid">
    <div class="row">
      <!-- Sidebar for desktop -->
      <div class="col-lg-2 sidebar d-none d-lg-block">
        <ul class="nav flex-column p-3">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="bi bi-house me-2"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-tags me-2"></i>Products</a>
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
                  <a class="nav-link  text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Log Out</a>
                </li>
        </ul>
      </div>

      <!-- Main Content -->
      <div class="col-lg-10 main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top border-body p-2">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo Image -->
            <a class="navbar-brand" href="index.php">
              <img src="../src/mmotors.png" alt="M-motors Logo" class="logo-img" />
            </a>

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Content with Icons -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <?php if ($isLoggedIn): ?>
                    <!-- Container for icons to control layout -->
                    <div class="row w-100">
                      <!-- Notification Icon -->
                      <div class="col-12">
                        <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Notifications">
                          <i class="bi bi-bell text-dark"></i>
                        </a>
                      </div>
                    </div>
                  <?php else: ?>
                    <!-- Show person icon with Bootstrap tooltip when logged out -->
                    <a class="nav-link" href="register.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Register">
                      <i class="bi bi-person text-success"></i>
                    </a>
                  <?php endif; ?>
                </li>
              </ul>

              <!-- Sidebar for mobile view inside the collapsible menu -->
              <ul class="navbar-nav d-lg-none">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="bi bi-house me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="bi bi-tags me-2"></i>Products</a>
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
                  <a class="nav-link  text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
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