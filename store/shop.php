<?php require "../includes/header.php";?>

<?php
require_once("../php/component.php");
?>

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