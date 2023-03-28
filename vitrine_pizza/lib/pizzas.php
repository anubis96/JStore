<?php
namespace Library;

function display_pizza($pizza){

    $id = $pizza["_id"];
    $pizza_image = $pizza["image"];
    $pizza_name = $pizza["name"];
    $pizza_price = $pizza["price"] / 100;
    $pizza_sold_price = $pizza["soldPrice"] / 100;

    return '<div class="product-item relative" data-id="'.$id.'">
    <img src="'.$pizza_image.'" width="150" alt="'.$pizza_image.'">
    <div class="product-details">
        <div class="product-name">'.$pizza_name.'</div>
        <div class="add-to-cart absolute">
            <i class="bi bi-zoom-in"></i> Détails
        </div>
        <div class="product-price">
            <span class="sold-price">'.$pizza_sold_price.'</span>
            <span class="regular-price"><del>'.$pizza_price.'</del></span>
        </div>
    </div>
</div>';
}