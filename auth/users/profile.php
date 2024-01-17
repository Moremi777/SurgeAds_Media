<?php require "../../config/config.php"; ?>

<?php

    $select = $conn->query("SELECT * FROM users");

    $select->execute();

    $profile = $select->fetch(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
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
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/store/shop.php"> Shop </a>
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

                <form class="d-flex" role="search" method="POST" action="profile.php?prof_id=<?php echo $profile->id; ?>">
                    <input class="form-control me-1" type="search" placeholder="What are you looking for..." aria-label="Search">
                    <img src="../../images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                    <img src="../../images/icons8-user-32.png" alt="user" class="nav-icons" onclick="toggleMenu()">

                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../../images/user.png" alt="user" class="nav-icons">
                                <h5> <?php echo $profile->fname; ?> <?php echo $profile->lname; ?> </h5>
                            </div>
                            <hr>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/icons8-user-32.png" alt="edit" class="nav-icons">
                                <p> Edit Profile </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="../../images/icons8-logistics-32.png" alt="edit" class="nav-icons">
                                <p> My Orders </p>
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
                            <a href="https://localhost/SurgeAds_Media/auth/logout.php" class="sub-menu-link">
                                <img src="../../images/logout.png" alt="logout" class="nav-icons">
                                <p> Logout </p>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <a href="https://localhost/SurgeAds_Media/store/cart.php"><img src="../../images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                </form>
            </div>
        </div>
    </nav>

    <h2> Products</h2>

    <div class="powr-ecommerce" id="957ac43d_1704981222"></div><script src="https://www.powr.io/powr.js?platform=html"></script>

    <br>
    <hr>
    <footer>
        <br>
        <div class="footer-links">
            <a href=""> © 2024, SurgeAds Media </a>
            <a href=""> Refund Policy </a>
            <a href=""> Privacy Policy </a>
            <a href=""> Terms of Service </a>
        </div>

        <div class="social-media" style="text-align: center; padding: 20px; margin-left: 10px;">
            <h6> Follow us on social media </h6>
            <a href="#"><img src="../../images/icons8-facebook-32.png" class="media" alt="Facebook"></a>
            <a href="#"><img src="../../images/icons8-instagram-32.png" class="media" alt="Instagram"></a>
            <a href="#"><img src="../../images/icons8-twitter-32.png" class="media" alt="X"></a>
            <a href="#"><img src="../../images/icons8-tiktok-32.png" class="media" alt="TikTok"></a>
        </div>
        <br>
    </footer>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>