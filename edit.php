<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Product</title></head>
<body>
    <h2>Edit Product</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Name: <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>"><br><br>
        Price: <input type="number" step="0.01" name="price" value="<?= $row['price'] ?>"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
