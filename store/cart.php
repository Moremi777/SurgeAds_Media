<?php
    require "../includes/header.php";
?>

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