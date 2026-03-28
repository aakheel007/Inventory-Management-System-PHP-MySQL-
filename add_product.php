<?php
include 'db.php';

$name = $_POST['product_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "INSERT INTO products (product_name, price, stock)
        VALUES ('$name', '$price', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    window.location.href='view_products.php';
    </script>";
} else {
    echo "<script>alert('Error: ".$conn->error."');</script>";
}
?>