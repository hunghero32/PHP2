<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    div {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    a {
        display: block;
        margin-top: 20px;
        color: #007bff;
        text-decoration: none;
    }
</style>
<div>
    <h2>Cập nhật Thông Tin</h2>
    <?php if (isset($product) && !empty($product)) : ?>
        <form action="<?= isset($product['id']) ? $product['id'] : '' ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="type">Loại:</label>
                <select id="type" name="type">
                    <?php foreach ($type as $val) : ?>
                        <option value="<?= $val['id'] ?>"><?= $val['type'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required>

                <label for="img">Ảnh:</label>
                <img src="<?= $product['img'] ?>" alt="Current Image" style="max-width: 100px;">
                <input type="file" id="img" name="img" accept="image/*">
                

                <label for="des">Mô Tả:</label>
                <textarea id="des" name="des" value="<?= $product['des'] ?>" ></textarea>

                <label for="price">Giá:</label>
                <input type="text" id="price" value="<?= $product['price'] ?>" name="price" required>

                <button type="submit">Cập nhật Thông Tin</button>
            </div>
        </form>
    <?php endif; ?>
    <a href="http://localhost:10/PHP2/ASM2/product">Quay lại</a>
</div>