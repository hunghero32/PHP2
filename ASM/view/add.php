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
  <h2>Thêm tài khoản</h2>
  <form action="index.php?url=add" method="POST">
    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="phone">Số Điện Thoại:</label>
      <input type="text" id="phone" name="phone">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="name">Họ Và Tên:</label>
      <input type="text" id="name" name="name">

      <label for="birthday">Sinh Nhật:</label>
      <input type="date" id="birthday" name="birthday">

      <label for="gender">Giới Tính:</label>
      <select id="gender" name="gender">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
      </select>
      <label for="address">Địa chỉ:</label>
      <input type="text" id="address" name="address">

      <button type="submit">Thêm tài khoản</button>
    </div>
  </form>
  <a href="index.php?url=list">Quay lại</a>
</div>