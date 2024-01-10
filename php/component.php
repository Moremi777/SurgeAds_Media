<?php 

function component(){
    $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"cart.html\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"../images/3.png\" alt=\"image1\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\"> Product 3 </h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                        Some quick example to build on the card.
                    </p>
                    <h5>
                        <small><s class=\"text-secondary\">R 519.00</s></small>
                        <span class=\"price\"> R 599.00 </span>
                    </h5>

                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\"> Add to Cart <i class=\"fas fa-shopping-cart\"></i> </button>
                </div>
            </div>
        </form>
    </div>";
}

echo $element;

