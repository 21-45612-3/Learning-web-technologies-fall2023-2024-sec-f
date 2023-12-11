<?php 


function component($productname, $productprice, $productimg,) {
    $element = "
    <form method=\"post\">
        <img src=\"$productimg\" alt=\"pic1\" width=\"200\" height=\"200\"><br>
        <h2>$productname</h2>
        <h3>$$productprice</h3><br>
        <button type=\"submit\" name=\"add\" value=\"\">Add to cart</button><br>
        <hr><br>
    </form>
    ";
    echo $element;
}


?>