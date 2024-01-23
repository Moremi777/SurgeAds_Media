<?php

session_start();

?>
<?php require "../config/config.php"; ?>

<?php

    if(isset($_SESSION['username']))
    {
        header("location: https://localhost/SurgeAds_Media/index.php");
    }

    if(isset($_POST['submit']))
    {
        // Assuming you have a PDO instance $conn
        $name = $_POST['f_name'];
        $email = $_POST['user_email']; // The username submitted by the user

        // Prepare a SELECT statement to check if the user exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE fname = :f_name OR email = :user_email");
        $stmt->execute([':f_name' => $name, ':user_email' => $email]);

        // Fetch the user from the database
        $user = $stmt->fetch();

        if ($user) {
            // The user exists, display a message and suggest a password reset
            echo "<div class='alert alert-danger text-center text-white' role='alert'>
                An account with this username or email already exists. If you forgot your password, please reset it.
            </div>";
        } else {
            // The user doesn't exist, continue with the registration process
            if($_POST['user_email'] == '' OR $_POST['pass'] == ''){
                echo "<div class='alert alert-danger text-center text-white' role='alert'>
                Enter data into inputs
            </div>";
            }
            else{
                $name = $_POST['f_name'];
                $surname = $_POST['l_name'];
                $email = $_POST['user_email'];
                $phone = $_POST['phone_number'];
                $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

                $insert = $conn->prepare("INSERT INTO users (fname, lname, phone_number, email, user_password) VALUES 
                (:first_name, :last_name, :phone, :email, :passw)");

                $insert->execute([
                    ':first_name' => $name,
                    ':last_name' => $surname,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':passw' => $password
                ]);

                header("location: http://localhost/SurgeAds_Media/auth/login.php");
            }
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
                <input type="email" name="user_email" placeholder="Email " required>  
            </div>
            <div class="input-box">
                <input type="tel" name="phone_number" placeholder="Phone number " required>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="Create password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            
            <!--Create confirm password HERE-->

            <div class="remember-forgot">
                <label><input type="checkbox" id="showPassword"> Show password</label>
                <!--<a href="#">Forgot password</a>-->
            </div>

            <!--Javascript code to show password when the checkbox is checked or not -->
            <script>
                const passwordInput = document.getElementById('password');
                const showPasswordCheckbox = document.getElementById('showPassword');

                showPasswordCheckbox.addEventListener('change', function () {
                const isChecked = this.checked;
                passwordInput.type = isChecked ? 'text' : 'password';
                });
            </script>
            
            <button type="submit" name="submit" class="btn">Register</button>
            
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
