<form action="{{route('update/'.$sachObj['idSach'])}}" method="post">
    <input type = "hidden" name = "tenSach" value = "{{$sachObj['idSach']}}">
    <input type = "text" name = "tenSach" value = "{{$sachObj['tenSach']}}">
    <input type = "text" name = "tacGia" value = "{{$sachObj['tacGia']}}">
    <input type = "text" name = "soLuong" value = "{{$sachObj['soLuong']}}">
    <input type = "text" name = "gia" value = "{{$sachObj['gia']}}">

    <input type = "submit" name = "update" value = "UPDATE">

</form>