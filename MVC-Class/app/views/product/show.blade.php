<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price<td>
    </tr>
    @foreach($pro as $key=>$value)
    <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        <td>{{$value['price']}}</td>

    </tr>
    @endforeach
</table>