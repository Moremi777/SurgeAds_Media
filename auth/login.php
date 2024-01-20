<?php 
session_start(); // Start the session

require "../config/config.php"; 

//check for the submit 
if(isset($_POST['submit'])){
    //take the data
    $email = $_POST['user_email'];
    $password = $_POST['pass']; 

    if($email == '' OR $password == '')
    {
        echo "<div class='alert alert-danger text-center text-white' role='alert'>
            Enter data into inputs
            </div>";
    }
    else{
        //write our query
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);

        //execute and then fetch
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //do our password verify function and redirect to the index page
        if($user && password_verify($password, $user['user_password']))
        {
            $_SESSION['username'] = $user['email']; 
            $_SESSION['user_id'] = $user['id'];

            header("location: https://localhost/SurgeAds_Media/auth/users/profile.php");
        }
        else{
            echo "<div class='alert alert-danger text-center text-white' role='alert'>
                    The email or password is incorrect
                    </div>";
        }
    } 
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <input type="text" name="user_email" placeholder="Username " required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="Password " required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            
            <button type="submit" name="submit" class="btn">Login</button>
            
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a>
                </p>
            </div>
        </form>
    </div>

<?php require "../includes/footer.php"; ?>