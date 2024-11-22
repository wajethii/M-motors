<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// Include headeradmin.php
include('headeradmin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <!-- Include Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="../styles.min.css" />
</head>
<body>
    <div class="heroo">
        <div class="row justify-content-center mb-4 mt-5">
            <div class="col-12 col-md-6">
                <h1 class="mb-4">Your Account</h1>
                <h3 class="mt-4 mb-4">Login</h3>
                <div class="card border-bottom">
                    <div class="card-body">
                        <form action="ver.php" method="POST" class="row g-3">
                            <?php if (isset($_SESSION['error_message'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_message']; ?>
                            </div>
                            <?php
                            unset($_SESSION['error_message']); // Clear the error message after displaying it
                            }
                            ?>
                            <div class="col-12">
                                <label for="inputUsername" class="form-label">Username</label>
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
                            <div class="col-12 mb-3 d-grid">
                                <button type="submit" name="login_btn" class="btn btn-dark shadow">
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

    <?php include('footeradmin.php'); ?>
</body>
</html>
