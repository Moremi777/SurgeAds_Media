<?php

require_once("../php/component.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop-Products</title>
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
            <img src="" alt="LOGO" class="navbar-brand">
            <a class="navbar-brand" href="#">SurgeAds Media</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 p-2 ml-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html"> Home </a>
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
                    <img src="../images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                    <img src="../images/icons8-user-32.png" alt="user" class="nav-icons">
                   
                    <div class="icon-cart">
                        <a href="cart.html"><img src="../images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                        <span>0</span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container_shop">
        <h2> Products </h2>
    </div>

    <div class="container">
        <div class="row text-center py-5">
            <?php
                component("Product 1", 599.00, "../images/1.png");
                component("Product 2", 99.00, "../images/2.png");
                component("Product 3", 299.00, "../images/3.png");
                component("Product 4", 499.00, "../images/4.png");
            ?>    
            <br>
            <?php
                component("Product 5", 199.00, "../images/5.png");
                component("Product 6", 699.00, "../images/6.png");
                component("Product 7", 799.00, "../images/7.png");
                component("Product 8", 899.00, "../images/8.png");
            ?>
        </div>
    </div>

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
            <a href="#"><img src="../images/icons8-facebook-32.png" class="media" alt="Facebook"></a>
            <a href="#"><img src="../images/icons8-instagram-32.png" class="media" alt="Instagram"></a>
            <a href="#"><img src="../images/icons8-twitter-32.png" class="media" alt="X"></a>
            <a href="#"><img src="../images/icons8-tiktok-32.png" class="media" alt="TikTok"></a>
        </div>
        <br>
    </footer>

    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>