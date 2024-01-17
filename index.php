<?php

session_start();

?>

<?php require "config/config.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SurgeAds Media</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="https://localhost/SurgeAds_Media/index.php" alt="LOGO" class="navbar-brand">
            <a class="navbar-brand" href="https://localhost/SurgeAds_Media/index.php">SurgeAds Media</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 p-2 ml-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/store/shop.php"> Shop </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"> Foods </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://localhost/SurgeAds_Media/store/shop.php"> Dog </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="https://localhost/SurgeAds_Media/store/shop.php"> Cat </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="https://localhost/SurgeAds_Media/store/shop.php"> Parrot </a></li>
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
                    <img src="images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                </form>
                <li class="nav-item dropdown">
                    <img src="images/icons8-user-32.png" alt="user" class="nav-icons" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://localhost/SurgeAds_Media/auth/login.php"> Sign In </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://localhost/SurgeAds_Media/auth/register.php"> Sign Up </a></li>
                        </ul>
                </li>
                <a href="https://localhost/SurgeAds_Media/store/cart.php"><img src="images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
            </div>
        </div>
    </nav>

    <img src="images/roberto-nickson-_JGVVEfbTVQ-unsplash.jpg" class="img-fluid" alt="displayImage">
    <div class="transparent-container">
        <div class="content">
            <h6> EXTRA LOVE </h6>
            <h2> Spoil Your Furry <br> Friend with the Best <br> Pet Supplies </h2>

            <form action="https://localhost/SurgeAds_Media/store/shop.php" method="GET">
                <button type="submit"> Shop Now </button>
            </form>
        </div>
    </div>

    <div class="transparent-container-2">
        <div class="content-2">
            <h2> Our Story </h2>
            <p> 
                We are a team of passionate pet lovers who believe that our furry friends deserve the best.
                That's why we started PetGoods, a online store that offers high-quality products for 
                dogs, cats, and other pets. Whether you are looking for food, toys, grooming, or accessories,
                we have something for every pet and every budget. Our mission is to make pet care easy and fun,
                by providing you with a wide selection of products, fast delivery, and excellent customer service.
                We also care about the environment, and that's why we use eco-friendly packaging and support animal 
                welfare organizations. At PetGoods, we treat your pets like family, because they are.
            </p>
        </div>
    </div>

    <div class="category">
        <h1>
            Categories
        </h1>
        <hr>
    </div>

    <div>

    </div>
    
    <div class="container-1">
        <div class="row row-cols-1 row-cols-md-5 g-4 row row justify-content-center">
            <div class="col-md-3">
              <div class="card">
                <img src="images/kabo-yUr_afmmRR0-unsplash.jpg" alt="...">
                <div class="card-text-1">
                    <h5 class="card-title">Foods</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="images/giacomo-lucarini-7M0SG3ZKdlE-unsplash.jpg" alt="...">
                <div class="card-text-1">
                    <h5 class="card-title">Toys</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="images/andrew-neel-gOj023vV8CQ-unsplash.jpg" alt="...">
                <div class="card-text-1">
                    <h5 class="card-title">Beds</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="images/charlesdeluvio-DziZIYOGAHc-unsplash.jpg" alt="...">
                <div class="card-text-1">
                    <h5 class="card-title">Health & Wellness</h5>
                </div>
              </div>
            </div>
        </div>
    </div>

    <img src="images/matt-nelson-aI3EBLvcyu4-unsplash.jpg" class="img-fluid" alt="displayImage">

<?php require "includes/footer.php"; ?>