<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
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
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/index.php"> Home </a>
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
                        <a href="https://localhost/SurgeAds_Media/store/cart.php"><img src="../images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                        <span>0</span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container_shop">
        <h2> My Cart </h2>
    </div>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <hr>

                    <form action="cart.html" method="get" class="cart-items">
                        <div class="border rounded">
                            <div class="row bg-white">
                                <div class="col-md-3 pl-0">
                                    <img src="../images/1.png" alt="image1" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="pt-2"> Product 1</h5>
                                    <small class="text-secondary"> Seller: dailytuition </small>
                                    <h5 class="pt-2"> R 599.99 </h5>
                                    <button type="submit" class="btn btn-warning"> Save for Later </button>
                                    <button type="submit" class="btn btn-danger mx-2" name="remove"> Remove </button>
                                </div>
                                <div class="col-md-3 py-5">
                                    <div>
                                        <button type="button" class="btn bg-light border rounded-circle"> <i class="fas fa-minus"></i></button>
                                        <input type="text" value="1" class="form-control w-25 d-inline">
                                        <button type="button" class="btn bg-light border rounded-circle"> <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>

<?php require "../includes/footer.php"; ?>