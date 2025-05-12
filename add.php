<!DOCTYPE html>
<html>
<head><title>Add Product</title></head>
<body>
    <h2>Add Product</h2>
    <form action="insert.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Price: <input type="number" step="0.01" name="price" required><br><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
