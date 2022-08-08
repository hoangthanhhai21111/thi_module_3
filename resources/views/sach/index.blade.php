<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <a href="{{ route('sach.create') }}" class="btn btn-primary"> thêm</a>
    <table class="table table-striped ">
        <tr>
            <th>
                stt
            </th>
            <th>
                ten sach
            </th>
            <th>
                ma sach
            </th>

            <th>
                tac gia
            </th>
            <th>
                the loai
            </th>
            <th>
                nam xuat ban
            </th>

        </tr>
        @foreach ($sach as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->ten_sach }}</td>
                <td>{{ $value->ma_sach }}</td>
                <td>{{ $value->tac_gia }}</td>
                <td>{{ $value->the_loai }}</td>
                <td>{{ $value->so_trang }}</td>
                {{-- <td>{{$value->the_loai}}</td> --}}
                <td>{{ $value->nam_san_xuat }}</td>
                <td>
                    <form action="{{ route('sach.delete', $value->id) }}" method="post" enctype="multipart/form">
                        <a href="{{ route('sach.edit', $value->id) }}"class="btn btn-success">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="xóa" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
