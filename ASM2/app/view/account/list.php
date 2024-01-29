<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  div {
    max-width: 900px;
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

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #4caf50;
    color: #fff;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #f1f1f1;
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
  <h2>Danh sách tài khoản</h2>
  <a href="Aadd"><button >Add new</button></a> 
  <a href="Acheck"><button >Check ACC</button></a>            
  <table >
    <thead>
      <tr>
        <th>STT</th>
        <th>Tài Khoản:</th>
        <th>Mật Khẩu:</th>
        <th>Email:</th>
        <th>Loại:</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($account as $val):         
        $roleText = [
            0 => 'Admin',
            1 => 'User'
        ];?>
            <tr>
                <td><?= $val['id']?></td>
                <td><?= $val['username']?></td>
                <td><?= $val['password']?></td>
                <td><?= $val['email']?></td>
                <td><?= $roleText[$val['role']]?></td>
                <td>
            <a href="Aupdate/<?= $val['id']?>"><button class="btn btn-warning">Update</button></a> 
            <a href="Adelete/<?= $val['id']?>"><button class="btn btn-danger">Delete</button></a>
          </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
