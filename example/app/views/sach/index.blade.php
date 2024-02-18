<table border="1">
    <thead>
        <th>ID</th>
        <th>Tên sách</th>
        <th>Tác giả</th>
        <th>Số lượng</th>
        <th>Giá</th>
    </thead>
    <tbody>

         @foreach($lstSach as $sach)
            <tr>
                <td>{{ $sach['idSach'] }}</td>
                <td>{{ $sach['tenSach'] }}</td>
                <td>{{ $sach['tacGia'] }}</td>
                <td>{{ $sach['soLuong'] }}</td>
                <td>{{ $sach['gia'] }}</td>
                <th>
                    <a href="">Sửa</a>
                    <a href="">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>