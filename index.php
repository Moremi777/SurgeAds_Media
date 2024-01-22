<?php session_start(); ?>

<?php require "config/config.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SurgeAds Media</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="" alt="LOGO" class="navbar-brand">
            <a class="navbar-brand" href="#">SurgeAds Media</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 p-2 ml-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/SurgeAds_Media/store/shop.php"> Shop </a>
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
                        <a class="nav-link active" aria-current="page" href="#">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>

                <form class="d-flex" role="search" method="POST" action="profile.php">
                    <input class="form-control me-1" type="search" placeholder="What are you looking for..." aria-label="Search">
                    <img src="images/icons8-search-32.png" class="nav-icons" type="submit" alt="search">
                    <img src="images/icons8-user-32.png" alt="user" class="nav-icons" data-toggle="dropdown" aria-expanded="false" onclick="toggleMenu()">
                    
                    <?php if(isset($_SESSION['username'])) : ?>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="images/user.png" alt="user" class="nav-icons">
                                <h5>  <?php echo $_SESSION['name']; ?> <?php echo $_SESSION['surname']; ?> </h5>
                            </div>
                            <hr>
                            <a href="https://localhost/SurgeAds_Media/auth/users/edit_profile.php" class="sub-menu-link">
                                <img src="images/icons8-user-32.png" alt="edit" class="nav-icons">
                                <p> Edit Profile </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="images/icons8-logistics-32.png" alt="edit" class="nav-icons">
                                <p> My Orders </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="images/setting.png" alt="settings" class="nav-icons">
                                <p> Settings & Privacy </p>
                                <span></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <img src="images/help.png" alt="help" class="nav-icons">
                                <p> Help & Support </p>
                                <span></span>
                            </a>
                            <a href="https://localhost/SurgeAds_Media/auth/logout.php" class="sub-menu-link">
                                <img src="images/logout.png" alt="logout" class="nav-icons">
                                <p> Logout </p>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <a href="https://localhost/SurgeAds_Media/auth/login.php" class="sub-menu-link">
                                    <img src="images/icons8-user-32.png" alt="help" class="nav-icons">
                                    <p> Sign In </p>
                                    <span></span>
                                </a>
                                <a href="https://localhost/SurgeAds_Media/auth/register.php" class="sub-menu-link">
                                    <img src="images/icons8-user-32.png" alt="logout" class="nav-icons">
                                    <p> Sign Up </p>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="icon-cart">
                        <a href="https://localhost/SurgeAds_Media/store/cart.php"><img src="images/icons8-cart-32.png" alt="cart" class="nav-icons"></a>
                        <span>0</span>
                    </div>
                </form>
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
            FEATURED PRODUCTS
        </h1>
        <hr>
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

    <div class="category">
        <h1>
            WHY CHOOSE US ?
        </h1>
        <hr>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="images\wynand-van-poortvliet-kWUZKKBR2Ag-unsplash.jpg" class="d-block w-100 img-fluid" alt="delivery">

            <div class="carousel-caption d-none d-md-block">
                <h3>Priority Shipping</h3>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images\charanjeet-dhiman-mHusyBu4bxM-unsplash.jpg" class="d-block w-100 img-fluid" alt="customer-support">
            <div class="carousel-caption d-none d-md-block">
                <h3>Customer Support</h3>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images\david-dvoracek-QiPe0UpC0_U-unsplash.jpg" class="d-block w-100 img-fluid" alt="secure_shopping">
            <div class="carousel-caption d-none d-md-block">
                <h3>100% Secure Shopping</h3>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="background-image">
        <img src="images/matt-nelson-aI3EBLvcyu4-unsplash.jpg" class="img-fluid" alt="displayImage">
        
        <div class="contact-container">
            <h1> CONTACT US </h1>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name:">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone number (Optional): </label>
                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Phone number:">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter your message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message:"></textarea>
            </div>
            <div class="contact-button">
                <button type="submit" class="btn btn-dark">Send Message</button>
            </div>
        </div>  
    </div>

<?php require "includes/footer.php"; ?>