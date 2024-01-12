<?php

session_start();

?>

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

    <!-- SUPPLIER PLUGIN -->
    <div class="powr-ecommerce" id="957ac43d_1704981222"></div><script src="https://www.powr.io/powr.js?platform=html"></script>

    <!-- PRODUCT REVIEW PLUGIN -->
    <div class="powr-product-reviews" id="eff64d4d_1704981942"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
    
<?php require "../includes/footer.php"; ?>