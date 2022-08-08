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
    <form action="{{ route('theloai.store') }}"class="form-horizontal" method="post">
        <h1>thêm thể loại</h1>
        @csrf
        <table class="table table-striped"style="width:1000px;height:700px,">
            <tr>
                <th style="width:500px;height:50px">
                    tên thể loại: <input type="text"name='ten_theloai' class="form-control" style="width:500px">
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
