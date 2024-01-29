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
  <a href="add"><button >Add new</button></a>            
  <table >
    <thead>
      <tr>
        <th>STT</th>
        <th>Loại</th>
        <th>Mô Tả</th>
        <th>Số Lượng</th>
        <th>Giá</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($pet as $val)
            <tr>
                <td>{{$val['id']}}</td>
                <td>{{$val['loai']}}</td>
                <td>{{$val['mota']}}</td>
                <td>{{$val['soluong']}}</td>
                <td>{{$val['gia']}}</td>
                <td>
            <a href="update/{{$val['id']}}"><button class="btn btn-warning">Update</button></a> 
            <a href="delete/{{$val['id']}}"><button class="btn btn-danger">Delete</button></a>
          </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
