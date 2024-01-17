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
<div >
  <h2>Thêm tài khoản</h2>
  <form action="index.php?url=addTk" method="POST">
    <div >
      <label for="userName">User Name:</label>
      <input type="text"  id="userName" placeholder="Enter userName" name="userName">
      <p><?= isset($_SESSION['message']['userName'])?$_SESSION['message']['userName']:'';?></p>
    </div>
    <div >
      <label for="phoneNumber">Phone Number:</label>
      <input type="text"  id="phoneNumber" placeholder="Enter phone" name="phoneNumber">
      <p><?= isset($_SESSION['message']['phoneNumber'])?$_SESSION['message']['phoneNumber']:'';?></p>
    </div>
    <div >
      <label for="password">Password:</label>
      <input type="password"  id="password" placeholder="Enter password" name="password">
      <p><?= isset($_SESSION['message']['password'])?$_SESSION['message']['password']:'';?></p>
    </div>
    <div >
        <button type="submit"  name="submit">Thêm</button>
    </div>
  </form>
  <a href="index.php?url=home"><button >Quay lại</button></a>
</div>