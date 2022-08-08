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

    <form action="{{ route('sach.update', $sach->id) }}"class="form-horizontal" method="post">
        <h1>them sach</h1>
        @csrf
        @method('PUT')
        <table class="table table-striped"style="width:1000px;height:700px,">
            <tr>
                <th style="width:500px;height:50px">
                    ten sach: <input type="text"name='ten_sach' class="form-control" style="width:500px"
                        value="{{ $sach->ten_sach }}">
                    @error('ten_sach')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
                <th>
                    tac gia: <select name="tac_gia" class="form-control"style="width:300px"value="{{ $sach->tac_gia }}">
                        @foreach ($tagia as $key => $value)
                            <option value="{{ $value->ten_tacgia }}">{{ $value->ten_tacgia }}</option>
                        @endforeach
                    </select>
                    @error('tac_gia')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
                <th>
                    the loai: <select name="the_loai"
                        id=""class="form-control"style="width:300px"value="{{ $sach->the_loai }}">
                        @foreach ($theloai as $key => $value)
                            <option value="{{ $value->ten_theloai }}">{{ $value->ten_theloai }}</option>
                        @endforeach
                    </select>
                    @error('the_loai')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
            </tr>
            <tr>
                <th style="width:500px;height:50px">
                    so trang : <input type="number"name='so_trang' class="form-control"
                        style="width:100px; "value="{{ $sach->so_trang }}">
                    @error('so_trang')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
                <th>
                    nam xuat ban : <input type="number"name='nam_xuat_ban' class="form-control"
                        style="width:100px"value="{{ $sach->nam_xuat_ban }}">
                    @error('nam_xuat_ban')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
                <th>
                    mã sách: <input type="number" name="ma_sach" id=""class="form-control"style="width:300px"
                    value="{{ $sach->ma_sach }}">
                    @error('ma_sach')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </th>
            </tr>
            <tr>
                <td style="width:500px;height:50px"> <input type="submit" class="btn btn-primary"
                        style="width:500px;height:50px"></td>
            </tr>

        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
