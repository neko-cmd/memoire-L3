<?php

use Carbon\Carbon;

 function presentPrice($price)
{
    $price = $price / 100;

    return number_format($price, 2, ',', ' ') . ' €';
}
function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}
function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}

function getStockLevel($quantity)
{
    if ($quantity > setting('site.stock_threshold', 5)) {
        $stockLevel = '<div class="badge badge-success">En Stock</div>';
    } elseif ($quantity <= setting('site.stock_threshold', 5) && $quantity > 0) {
        $stockLevel = '<div class="badge badge-warning">Stock faible</div>';
    } else {
        $stockLevel = '<div class="badge badge-danger">Non disponible</div>';
    }

    return $stockLevel;
}