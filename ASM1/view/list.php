<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  div {
    max-width: 600px;
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
  <h2>Danh sách Nhân Viên</h2>
  <a href="index.php?url=add"><button >Add new</button></a>            
  <table >
    <thead>
      <tr>
        <th>Mã</th>
        <th>Họ và Tên</th>
        <th>Tuổi</th>
        <th>Địa Chỉ</th>
        <th>Số Điện Thoại </th>
        <th>Cấu hình</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($accounts as $val): ?>
            <tr>
                <td><?= $val['maNV']?></td>
                <td><?= $val['hoTen']?></td>
                <td><?= $val['tuoi']?></td>
                <td><?= $val['diaChi']?></td>
                <td><?= $val['sdt']?></td>
                <td><a href="index.php?url=update&id=<?= $val['maNV']?>"><button >Update</button></a> 
                <a href="index.php?url=delete&id=<?= $val['maNV']?>"><button >Delete</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
