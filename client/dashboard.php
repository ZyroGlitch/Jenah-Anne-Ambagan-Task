<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="h-auto">
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm font-bold" style="background-color:#E3A5C7;">
        <div class="container-fluid">

            <a class="navbar-brand" href="dashboard.php">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill me-3">
                    <h4 class="text-light">Name of School</h4>
                </div>
            </a>

            <!-- Responsive Navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <h4><a class="nav-link text-light" href="dashboard.php">Home</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link text-light" href="#">About</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link text-light" href="login.php">Logout</a></h4>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <h1>Welcome to Dashboard</h1>
    </div>
</body>

</html>