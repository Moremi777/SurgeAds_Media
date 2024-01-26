<?php session_start(); ?>

<?php require "../config/config.php"; ?>

<?php

    if(isset($_SESSION['username']))
    {
        $id = $_SESSION['user_id'];
        $select = $conn->prepare("
            SELECT users.*, user_addresses.*
            FROM users
            LEFT JOIN user_addresses ON users.id = user_addresses.user_id
            WHERE users.id = :id
        ");
        $select->bindParam(':id', $id);
        $select->execute();
        $address = $select->fetch(PDO::FETCH_OBJ);

        $imageSource = "auth/images/" . $address->profile_pic;

    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SurgeAds Media</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://localhost/SurgeAds_Media/css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="https://localhost/SurgeAds_Media/index.php" alt="LOGO" class="navbar-brand">
            <a class="navbar-brand" href="https://localhost/SurgeAds_Media/index.php">SurgeAds Media</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 p-2 ml-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/index.php"> Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false" href="#"> Foods </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Dog </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Cat </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"> Parrot </a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/index.php#story">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/index.php#contact">Contact</a>
                    </li>
                </ul>

                <form class="d-flex" role="search" method="POST" action="profile.php">
                    <input class="form-control me-1" type="search" placeholder="What are you looking for..." aria-label="Search">
                    <img src="https://localhost/SurgeAds_Media/images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                    <img src="https://localhost/SurgeAds_Media/images/icons8-user-32.png" alt="user" class="nav-icons" data-toggle="dropdown" aria-expanded="false" onclick="toggleMenu()">
                    
                    <?php if(isset($_SESSION['username'])) : ?>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../<?php echo $imageSource; ?>"  alt="user" class="nav-icons">
                                <h5>  <?php echo $_SESSION['name']; ?> <?php echo $_SESSION['surname']; ?> </h5>
                            </div>
                            <hr>
                            <a href="https://localhost/SurgeAds_Media/auth/users/edit_profile.php" class="sub-menu-link">
                                <img src="https://localhost/SurgeAds_Media/images/icons8-user-32.png" alt="edit" class="nav-icons">
                                <p> Edit Profile </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="https://localhost/SurgeAds_Media/images/icons8-logistics-32.png" alt="edit" class="nav-icons">
                                <p> My Orders </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="https://localhost/SurgeAds_Media/images/setting.png" alt="settings" class="nav-icons">
                                <p> Settings & Privacy </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="https://localhost/SurgeAds_Media/images/help.png" alt="help" class="nav-icons">
                                <p> Help & Support </p>
                                <span></span>
                            </a>
                            <a href="https://localhost/SurgeAds_Media/auth/logout.php" class="sub-menu-link">
                                <img src="https://localhost/SurgeAds_Media/images/logout.png" alt="logout" class="nav-icons">
                                <p> Logout </p>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <a href="https://localhost/SurgeAds_Media/auth/login.php" class="sub-menu-link">
                                    <img src="https://localhost/SurgeAds_Media/images/icons8-user-32.png" alt="help" class="nav-icons">
                                    <p> Sign In </p>
                                    <span></span>
                                </a>
                                <a href="https://localhost/SurgeAds_Media/auth/register.php" class="sub-menu-link">
                                    <img src="https://localhost/SurgeAds_Media/images/icons8-user-32.png" alt="logout" class="nav-icons">
                                    <p> Sign Up </p>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="icon-cart">
                        <a href="https://localhost/SurgeAds_Media/store/cart.php"><img src="https://localhost/SurgeAds_Media/images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                        <span>0</span>
                    </div>
                </form>
            </div>
        </div>
    </nav>