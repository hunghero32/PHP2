<!-- views/editLaptopForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop</title>
</head>
<body>

<h2>Edit Laptop</h2>

<form action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $laptop['id']; ?>">
    
    <label for="name">Tên Máy:</label>
    <input type="text" name="name" value="<?php echo $laptop['name']; ?>" required><br>

    <label for="memory">Ram:</label>
    <input type="text" name="memory" value="<?php echo $laptop['memory']; ?>" required><br>

    <label for="disk">Bộ Nhớ:</label>
    <input type="text" name="disk" value="<?php echo $laptop['disk']; ?>" required><br>

    <label for="graphics">Card Màn Hình:</label>
    <input type="text" name="graphics" value="<?php echo $laptop['graphics']; ?>" required><br>

    <label for="price">Giá:</label>
    <input type="text" name="price" value="<?php echo $laptop['price']; ?>" required><br>

    <input type="submit" value="Update Laptop">
</form>

</body>
</html>
