<?php

require_once "config.php";

$productBrand = $_REQUEST['productBrand'];
$productYear = $_REQUEST['productYear'];
$productPrice = $_REQUEST['productPrice'];

$query = "insert into tblCars (Brand, Year, Price) values ('$productBrand', '$productYear', '$productPrice')";

$result = mysqli_query($conn, $query);

if(isset($productBrand) && isset($productPrice) && isset($productYear)) {

    if ($result == 1) {

        header("location:addProduct.php?result=success");
    } else {
        header("location:addProduct.php?result=fail");
    }

}

else {
    header("location:addProduct.php?result=fail");
}
?>
