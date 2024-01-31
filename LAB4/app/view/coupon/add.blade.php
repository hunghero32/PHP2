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
  <h2>Thêm Thông Số</h2>
  <form action="add" method="POST">
    <div>
    <label for="couponCode">Code:</label>
    <input type="text" id="couponCode" name="couponCode">

      <label for="discount">Mô Tả:</label>
      <input type="text" id="discount" name="discount">

      <label for="expiryDate">Thời Gian:</label>
      <input type="date" id="expiryDate" name="expiryDate" required>

      <label for="createAt">Lý Do Tạo:</label>
      <input type="text" id="createAt" name="createAt" required>


      <button type="submit">Thêm </button>
    </div>
  </form>
  <a href="/PHP2/LAB4/">Quay lại</a>
</div>