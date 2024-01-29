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
    <?php if (isset($pet) && !empty($pet)) : ?>
        <form action="<?= isset($pet['id']) ? $pet['id'] : '' ?>" method="POST">
            <div>
                <input type="hidden" name="id" value="<?= $pet['id'] ?>">

                <label for="loai">Loại:</label>
                <select id="loai" name="loai">
                <option value="Chó" <?= $pet['loai'] === 'Chó' ? 'selected' : '' ?>>Chó</option>
                <option value="Mèo" <?= $pet['loai'] === 'Mèo' ? 'selected' : '' ?>>Mèo</option>
                <option value="Chuột" <?= $pet['loai'] === 'Chuột' ? 'selected' : '' ?>>Chuột</option>
                <option value="Tắc Kè" <?= $pet['loai'] === 'Tắc Kè' ? 'selected' : '' ?>>Tắc Kè</option>
                </select>
                <label for="mota">Mô Tả:</label>
                <input type="text" id="mota" value="<?= $pet['mota'] ?>"name="mota">

                <label for="soluong">Số Lượng:</label>
                <input type="number" id="soluong" name="soluong" value="<?= $pet['soluong'] ?>"required>

                <label for="gia">Giá:</label>
                <input type="number" id="gia" name="gia" value="<?= $pet['gia'] ?>"required>


                <button type="submit">Cập nhật Thông Tin</button>
            </div>
        </form>
    <?php endif; ?>
    <a href="/PHP2/LAB3/">Quay lại</a>
</div>