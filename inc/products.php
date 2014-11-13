<?php

function get_list_view_html($product_id, $product){

    $output = "";

    $output .= "<li>";
    $output .= '<a href="shirt.php?id=' . $product_id . '">';
    $output .= '<img src="' . $product["img"] . '" alt="' . $product["name"] . '"/>';
    $output .= "<p>View Details</p>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;

}



$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "LY34FWCK4RG5J",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "4SV25L2LUEUG2",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "KBRNV4P6JWAKU",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "WNAKE7VM8J32W",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "ESCZMAYNK34BA",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "7JJM9T3YWQNFY",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Teal",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "V79B9L2JMADBC",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[108] = array(
    "name" => "Mike the Frog Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "JK3ZW5QSQH3UG",
    "sizes" => array("Large", "X-Large")
);

?>