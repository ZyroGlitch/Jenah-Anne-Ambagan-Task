<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Section</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- SweetJsAlert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
    body {
        background-color: #FFDFD6;
    }
    </style>
</head>

<body class="text-light container h-auto">

    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-10 col-md-10">
            <div class="card shadow">
                <div class="row justify-content-between align-items-center h-auto">
                    <div class="col-lg-6 col-md-6" style="background-color: #E3A5C7;">
                        <img src="../assets/signin1.png" alt="image1" class="object-fit-contain"
                            style="width:400px;height:400px;">
                    </div>

                    <div class="col-lg-6 col-md-6 px-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>

                        <div class="mb-5">
                            <h2>Welcome Back</h2>
                        </div>

                        <form action="operation/loginData.php" method="post">
                            <div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" required
                                        name="username">
                                </div>
                                <div class="input-group mb-1">
                                    <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required
                                        name="password" id="password-field">
                                    <span class="input-group-text">
                                        <i class="bi bi-eye-slash" id="toggle-password" style="cursor: pointer;"></i>
                                    </span>
                                </div>


                                <p class="text-end mb-4"><a href="#">Forgot Password?</a></p>

                                <div class="row justify-content-evenly align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-primary rounded-pill" value="Login Now"
                                                name="userBtn">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="d-grid">
                                            <button class="btn btn-secondary rounded-pill">
                                                Create Account
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    
    if (isset($_SESSION['error'])) {
        echo "<script> document.addEventListener('DOMContentLoaded', function() {
                 Swal.fire({      
                    icon: 'error',
                    title: 'Incorrect Username or Password.',
                });
            });</script>";
        // Unset the session variable to prevent showing the alert on subsequent page loads
        unset($_SESSION['error']);
    }
   
    ?>

    <script src="main.js"></script>
</body>

</html>