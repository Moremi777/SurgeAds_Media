<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

require "../config/config.php";

// Redirect if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: http://localhost/SurgeAds_Media/index.php");
    exit();
}

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<div class='alert alert-danger text-center text-white' role='alert'>Enter data into inputs</div>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Debugging
        var_dump($email, $password);

        // Use prepared statements to prevent SQL injection
        $login = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $login->bindParam(':email', $email);
        $login->execute();

        // Fetch the user as an associative array
        $row = $login->fetch(PDO::FETCH_ASSOC);

        // Debugging
        var_dump($row);

        if ($login->rowCount() > 0) {
            // Debugging
            var_dump(password_verify($password, $row['user_password']));

            if (password_verify($password, $row['user_password'])) {
                $_SESSION['name'] = $row['fname'];
                $_SESSION['surname'] = $row['lname'];
                $_SESSION['username'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];

                header('location: http://localhost/SurgeAds_Media/auth/users/profile.php');
                exit(); // Make sure to exit after sending the header
            } else {
                echo "<div class='alert alert-danger text-center text-white' role='alert'>The email or password is incorrect 1</div>";
            }
        } else {
            echo "<div class='alert alert-danger text-center' role='alert'>The email or password is incorrect</div>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="login.php">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password " required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            
            <button type="submit" name="submit" class="btn">Login</button>
            
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>
