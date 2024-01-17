<?php

session_start();

?>
<?php require "../config/config.php"; ?>

<?php 

    //check for the submit 

    //take the data

    //write our query

    //execute and then fetch

    //do our rowCount

    //do our password verify function and redirect to the index page

    if(isset($_SESSION['user_id']))
    {
        header("location: http://localhost/SurgeAds_Media/auth/users/profile.php");
    }

    if(isset($_POST['submit'])){
        if($_POST['user_email'] == '' OR $_POST['pass'] == '')
        {
          echo "<div class='alert alert-danger text-center text-white' role='alert'>
              Enter data into inputs
            </div>";
        }
        else{
            $email = $_POST['user_email'];
            $password = $_POST['pass'];

            $login = $conn->query("SELECT * FROM users WHERE email = '$email'");

            $login->execute();

            $row = $login->FETCH(PDO::FETCH_ASSOC);

            if($login->rowCount() > 0)
            {
                if(password_verify($password, $row['user_password']))
                {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['user_id'] = $row['id'];

                    header('location: http://localhost/SurgeAds_Media/auth/users/profile.php');
                }
                else{
                  echo "<div class='alert alert-danger text-center text-white' role='alert'>
                          The email or password is incorrect
                        </div>";
                }
            } 
            else{
              echo "<div class='alert alert-danger text-center' role='alert'>
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
        <form method="POST" action ="users/profile.php">
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