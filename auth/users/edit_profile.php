<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="css/editProfile.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="" alt="LOGO" class="navbar-brand">
            <a class="navbar-brand" href="#">SurgeAds Media</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 p-2 ml-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.html"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../store/shop.html"> Shop </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"> Foods </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Dog </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Cat </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Parrot </a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-1" type="search" placeholder="What are you looking for..." aria-label="Search">
                    <img src="../../images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                    <img src="../../images/icons8-user-32.png" alt="user" class="nav-icons" onclick="toggleMenu()">

                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../../images/user.png" alt="user" class="nav-icons">
                                <h3> John Doe </h3>
                            </div>
                            <hr>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/icons8-user-32.png" alt="edit" class="nav-icons">
                                <p> Edit Profile </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/setting.png" alt="settings" class="nav-icons">
                                <p> Settings & Privacy </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/help.png" alt="help" class="nav-icons">
                                <p> Help & Support </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/logout.png" alt="logout" class="nav-icons">
                                <p> Logout </p>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <a href="../../store/cart.html"><img src="../../images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                </form>
            </div>
        </div>
    </nav>


    <h1> Edit Information </h1>

    <div class="container">
        <div class="profile_picture">
            <h5> Update Image </h5>
            <img src="../images/default_ProfilePicture.png" id="profile-pic">
            <div class="wrapperProfile-pic">
                <form action="">
                    <div class="test">
                        <input type="file" accept="image/*" id="input-file"> 
                    </div>
                </form>
            </div>
        </div>

        <div class="wrapperInfo">
            <form action="edit_profile.php">
                <div class="input-box">
                    <input type="text" name="f_name" placeholder="Name " required>

                    <input type="text" name="l_name" placeholder="Surname " required>

                    <input type="email" name="user_email" placeholder="Email " required>  

                    <input type="tel" name="phone_number" placeholder="Phone number " required>

                    <input type="password" name="pass" placeholder="New password" required>

                    <label><input type="checkbox" id="showPassword"> Show password</label>

                    <button type="submit" name="submit" class="btn btn-warning"> Update Details </button>
                    <div class="message">
                        <label for="submit"> Message is displayed here </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h1> Address Information </h1>

    <div class="container">
        <h5> Delivery Address: </h5>
        <div class="wrapperInfo">
            <form action="edit_profile.php">
                <div class="input-box">
                    <input type="text" name="line1" placeholder="Address Line 1:" required>

                    <input type="text" name="line2" placeholder="Address Line 2:" required>

                    <input type="text" name="suburb" placeholder="Suburb:" required>  

                    <input type="text" name="city" placeholder="City:" required>

                    <input type="code" name="postal_code" placeholder="Postal Code:" required>

                    <input type="code" name="country" placeholder="Country:" required>

                    <button type="submit" name="submit-add" class="btn btn-success"> Add Details </button>
                    <button type="submit" name="submit-update" class="btn btn-warning"> Update Details </button>
                    <div class="message">
                        <label for="submit"> Message is displayed here </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br><br>
    <!--Javascript code to show password when the checkbox is checked or not -->
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function () {
            const isChecked = this.checked;
            passwordInput.type = isChecked ? 'text' : 'password';
        });
    </script>

    <!--Javascript for displaying selected profile picture-->
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>


<?php require "../../includes/footer.php"?>