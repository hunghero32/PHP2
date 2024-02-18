@if(isset($_SESSION['errors'])&& isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $error)
            <li style= "color: red">{{$error}}</li>

        @endforeach
    </ul>

@endif

<form action="add" method="post">
    <input type = "text" name = "tenSach" >
    <input type = "text" name = "tacGia" >
    <input type = "text" name = "soLuong" >
    <input type = "text" name = "gia" >

    <input type = "submit" name = "add" value = "ADD">

</form>