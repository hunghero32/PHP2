<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
    <title>Thông Số Laptop</title>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Tên Máy</th>
        <th>Ram</th>
        <th>Bộ Nhớ</th>
        <th>Card Màn Hình</th>
        <th>Giá</th>
        <th> Cấu Hình </th>
    </tr>
    <?php foreach($laptops as $key => $value) { ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['memory'] ?></td>
            <td><?php echo $value['disk'] ?></td>
            <td><?php echo $value['graphics'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td>
                <a href="index.php?action=update&id=<?php echo $value['id']; ?>">Edit</a>
                <a href="index.php?action=delete&id=<?php echo $value['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="index.php?action=add">Add Laptop</a>
</body>
</html>
