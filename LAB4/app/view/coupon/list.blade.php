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
  <h2>Danh sách </h2>
  <a href="add"><button >Add new</button></a>            
  <table >
    <thead>
      <tr>
        <th>STT</th>
        <th>Code</th>
        <th>Mô Tả</th>
        <th>Thời Gian</th>
        <th>Lý Do Tạo</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($coupon as $val)
            <tr>
                <td>{{$val['id']}}</td>
                <td>{{$val['couponCode']}}</td>
                <td>{{$val['discount']}}</td>
                <td>{{$val['expiryDate']}}</td>
                <td>{{$val['createAt']}}</td>
                <td>
            <a href="update/{{$val['id']}}"><button class="btn btn-warning">Update</button></a> 
            <a href="delete/{{$val['id']}}"><button class="btn btn-danger">Delete</button></a>
          </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
