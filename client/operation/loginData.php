<?php
session_start();

// User Login Function
if(isset($_POST['userBtn'])){
    $existUsername = "user";
    $existPassword = "user123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $existUsername && $password === $existPassword){
        header('Location:../dashboard.php');
    }else{
        $_SESSION['error'] = 'Incorrect Username or Password';
        header('Location:../login.php');
    }
}

// Admin Login Function
if(isset($_POST['adminBtn'])){
    $existUsername = "admin";
    $existPassword = "admin123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $existUsername && $password === $existPassword){
        header('Location:../../admin/adminDashboard.php');
    }else{
        $_SESSION['adminError'] = 'Incorrect Username or Password';
        header('Location:../../admin/adminLogin.php');
    }
}

    
?>