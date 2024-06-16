<?php
require_once 'connection2.php';

if (isset($_POST["register"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST["date_of_birth"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $contact_number = mysqli_real_escape_string($conn, $_POST["contact_number"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $password = md5($_POST["password"]); 

    $query = "INSERT INTO users (email, username, date_of_birth, gender, contact_number, address, password) VALUES ('$email', '$username', '$date_of_birth', '$gender', '$contact_number', '$address', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration Successful');</script>";
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Registration Failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Zenix - Crypto Admin Dashboard </title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="assets/images/logo-full.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Register your account</h4>
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1"><strong>Date of Birth</strong></label>
                                            <input type="date" name="date_of_birth" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Gender</strong></label>
                                            <select name="gender" class="form-control" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Contact Number</strong></label>
                                            <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Address</strong></label>
                                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page_login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
</body>
</html>
