<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$stmt = $conn->prepare("UPDATE products SET name=?, price=? WHERE id=?");
$stmt->bind_param("sdi", $name, $price, $id);
$stmt->execute();

header("Location: index.php");
?>
