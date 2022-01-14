<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discountPercent = $_POST["discount-percent"];
    $discountAmount = $price * $discountPercent/100;
    $discountPrice = $price - $discountAmount;
    echo "Product Description : ".$product . "<br>";
    echo "List Price : ".$price . "<br>";
    echo "Discount Percent : ".$discountPercent . "%<br>";
    echo "Discount Amount : ".$discountAmount . "<br>";
    echo "Discount Price : ".$discountPrice ;

}