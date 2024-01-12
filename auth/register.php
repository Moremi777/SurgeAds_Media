<?php

session_start();

?>
<?php require "../config/config.php"; ?>

<?php

  if(isset($_SESSION['email']))
  {
      header("location: http://localhost/SurgeAds_Media/index.php");
  }

  if(isset($_POST['submit']))
  {
    if($_POST['user_email'] == '' OR $_POST['pass'] == ''){
        echo "<div class='alert alert-danger text-center text-white' role='alert'>
          Enter data into inputs
      </div>";
    }
    else{
        $name = $_POST['f_name'];
        $surname = $_POST['l_name'];
        $email = $_POST['user_email'];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $insert = $conn->prepare("INSERT INTO users (fname, lname, email, user_password) VALUES 
        (:fname, :lname, :email, :pass)");

        $insert->execute([
            ':fname' => $name,
            ':lname' => $surname,
            ':email' => $email,
            ':pass' => $password
        ]);

        header("location: login.php");

    }
  }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form method="POST" action ="register.php">
            <h1>Register Account</h1>
            <div class="input-box">
                <input type="text" name="f_name" placeholder="Name " required>
                
            </div>
            <div class="input-box">
                <input type="text" name="l_name" placeholder="Surname " required>
                
            </div>
            <div class="input-box">
                <input type="text" name="user_email" placeholder="Email " required>
                
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="Create password" required>

            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Show password</label>
                <!--<a href="#">Forgot password</a>-->
            </div>
            
            <button type="submit" name="submit" class="btn">Register</button>
            
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>

<?php require "../includes/footer.php"; ?>