<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header class="container my-3">
        <h1>Danh Sach Nha Cung Cap</h1>
    </header>
    <section class="container my-3 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ma Nha Cung Cap</th>
                    <th>Ten Nha Cung Cap</th>
                    <th>Dia Chi</th>
                    <th>So DT</th>
                    <th>email</th>
                    <th>status</th>
                    <th>Chuc Nang</th>
                </tr>
            </thead>
            <tbody>
                @php $stt = 1; @endphp
                @forelse ($ttanhacc as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->ttaMaNCC }}</td>
                        <td>{{ $item->ttaTenNCC }}</td>
                        <td>{{ $item->ttaDiachi }}</td>
                        <td>{{ $item->ttaDienthoai }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->status }}</td>
                        <td>Xem/Sửa/Xóa</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Chưa Có Dữ Liệu</td>
                    </tr>
                @endforelse
            </tbody>

            
        </table>
            
        <!-- Liên kết phân trang -->
        <div class="d-flex justify-content-center">
            {{ $ttanhacc->links() }}
        </div>
        <button class="btn btn-primary">Them Moi</button>
    </section>
</body>
</html>