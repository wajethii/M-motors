<?php

$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../styles.min.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top border-body p-2">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <!-- Logo Image -->
      <a class="navbar-brand" href="index.php">
        <img src="../src/mmotors.png" alt="M-motors Logo" class="logo-img" />
      </a>

      <!-- Toggler Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvasMenu" aria-controls="mobileOffcanvasMenu" aria-label="Toggle navigation">
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
                <div class="col-12 col-md-4">
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
      </div>
    </div>
  </nav>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    });
  </script>

  <!-- Main content -->
  <div class="container-fluid min-vh-100 d-flex flex-column align-items-center">