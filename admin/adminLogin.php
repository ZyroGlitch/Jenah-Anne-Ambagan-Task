<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- SweetJsAlert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark container h-auto ">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-5 col-md-7">
            <form action="../client/operation/loginData.php" method="post">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="../assets/admin.png" alt="admin image" class="object-fit-contain mb-2"
                                style="width:150px;height:150px;">
                            <h3>ADMIN</h3>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input type="text" class="form-control" placeholder="Username" required name="username">
                        </div>
                        <div class="input-group mb-5">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" required name="password"
                                id="password-field">
                            <span class="input-group-text">
                                <i class="bi bi-eye-slash" id="toggle-password" style="cursor: pointer;"></i>
                            </span>
                        </div>

                        <div class="d-grid mb-3">
                            <input type="submit" value="Login" class="btn btn-primary" name="adminBtn">
                        </div>

                        <div class="d-grid">
                            <a href="../index.html" class="btn btn-secondary">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_SESSION['adminError'])) {
            echo "<script> document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({      
                        icon: 'error',
                        title: 'Incorrect Username or Password.',
                    });
                });</script>";
            // Unset the session variable to prevent showing the alert on subsequent page loads
            unset($_SESSION['adminError']);
        }
    ?>

    <script src="../client/main.js"></script>
</body>

</html>