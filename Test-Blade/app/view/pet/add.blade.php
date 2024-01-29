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
  <h2>Thêm Pet</h2>
  <form action="add" method="POST">
    <div>
    <label for="loai">Loại:</label>
      <select id="loai" name="loai">
        <option value="Chó">Chó</option>
        <option value="Mèo">Mèo</option>
        <option value="Chuột">Chuột</option>
        <option value="Tắc Kè">Tắc Kè</option>
      </select>
      <label for="mota">Mô Tả:</label>
      <input type="text" id="mota" name="mota">

      <label for="soluong">Số Lượng:</label>
      <input type="number" id="soluong" name="soluong" required>

      <label for="gia">Giá:</label>
      <input type="number" id="gia" name="gia" required>


      <button type="submit">Thêm </button>
    </div>
  </form>
  <a href="/PHP2/TEST-BLADE/">Quay lại</a>
</div>