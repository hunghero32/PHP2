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
    <?php if (isset($type) && !empty($type)) : ?>
        <form action="<?= isset($type['id']) ? $type['id'] : '' ?>" method="POST">
            <div>
                <input type="hidden" name="id" value="<?= $type['id'] ?>">
                <label for="type">Loại:</label>
                <input type="text" id="type" value="<?= $type['type'] ?>"name="type">
                <button type="submit">Cập nhật Thông Tin</button>
            </div>
        </form>
    <?php endif; ?>
    <a href="/PHP2/ASM2/Tlist">Quay lại</a>
</div>