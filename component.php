<?php

function component($productnaam, $productprijs, $productimg)
{
    $element=<<<END
    
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action=# method="post">
    <div class="card shadow">
                    <div>
                        <img src="$productimg" alt="image1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">$productnaam</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class=card-text>
                            Best drink there is!
                        </p>
                        <h5>
                            <small><s class="text-secondary">€150</s></small>
                            <span class="price">$productprijs</span>
                        </h5>

                        <button type=submit class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                    </div>
                </div>
            </form>
        </div>

    END;
    echo $element;
}

