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
input[type="password"],
input[type="email"],
input[type="date"],
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
    <h2>Cập nhật tài khoản</h2>
    <?php if (isset($account) && !empty($account)): ?>
        <form action="<?= isset($account['id']) ? $account['id'] : '' ?>" method="POST">
            <div>
            <input type="hidden" name="id" value="<?= $account['id'] ?>">

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?= $account['username'] ?>" required>

            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?= $account['password'] ?>" required>
            
            <label for="phone">Số Điện Thoại:</label>
            <input type="text" id="phone" name="phone" value="<?= $account['phone'] ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $account['email'] ?>" required>

            <label for="name">Họ Và Tên:</label>
            <input type="text" id="name" name="name" value="<?= $account['name'] ?>">

            <label for="birthday">Sinh Nhật:</label>
            <input type="date" id="birthday" name="birthday" value="<?= $account['birthday'] ?>">

            <label for="gender">Giới Tính:</label>
            <select id="gender" name="gender">
                <option value="Nam" <?= $account['gender'] === 'Nam' ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= $account['gender'] === 'Nữ' ? 'selected' : '' ?>>Nữ</option>
            </select>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" value="<?= $account['address'] ?>">

            <button type="submit">Cập nhật tài khoản</button>
        </div>
    </form>
    <?php endif; ?>
    <a href="/PHP2/ASM1/">Quay lại</a>
</div>