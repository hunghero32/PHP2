<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  div {
    width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    color: #333;
  }

  form {
    margin-top: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #555;
  }

  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
    text-align: center;
    color: #4caf50;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
</style>
  <h2>Cập nhật tài khoản</h2>
  <form action="index.php?url=update&id=<?= $accounts['id'];?>" method="POST">
    <div >
      <label for="">Tên:</label>
      <input type="text"  placeholder="Enter hoTen" name="hoTen" value="<?= isset($_POST['hoTen'])?$_POST['hoTen']:$accounts['hoTen'];?>">
      <p><?= isset($_SESSION['message']['hoTen'])?$_SESSION['message']['hoTen']:'';?></p>
    </div>
    <div >
      <label for="tuoi">Tuổi:</label>
      <input type="text"  id="tuoi" placeholder="Enter phone" name="tuoi" value="<?= isset($_POST['tuoi'])?$_POST['tuoi']:$accounts['tuoi'];?>">
      <p><?= isset($_SESSION['message']['tuoi'])?$_SESSION['message']['tuoi']:'';?></p>
    </div>
    <div >
      <label for="diaChi">Địa Chỉ:</label>
      <input type="diaChi"  id="diaChi" placeholder="Enter diaChi" name="diaChi" value="<?= isset($_POST['diaChi'])?$_POST['diaChi']:$accounts['diaChi'];?>">
      <p><?= isset($_SESSION['message']['diaChi'])?$_SESSION['message']['diaChi']:'';?></p>
    </div>
    <div >
      <label for="sdt">sdt:</label>
      <input type="text"  id="sdt" placeholder="Enter phone" name="sdt" value="<?= isset($_POST['sdt'])?$_POST['sdt']:$accounts['sdt'];?>">
      <p><?= isset($_SESSION['message']['sdt'])?$_SESSION['message']['sdt']:'';?></p>
    </div>
    <div >
        <input type="hidden" name="id" value="<?= $accounts['maNV'];?>">
        <button type="submit"  name="submit">Cập nhật</button>
    </div>
  </form>
  <a href="index.php?url=home"><button >Quay lại</button></a>
</div>