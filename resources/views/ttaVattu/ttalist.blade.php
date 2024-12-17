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
                    <th>Mã vật tư</th>
                    <th>Tên Vật Tư</th>
                    <th>Đơn Vị Tính</th>
                    <th>Phần Trăm</th>
               
                    <th>Chuc Nang</th>
                </tr>
            </thead>
            <tbody>
                @php $stt = 1; @endphp
                @forelse ($ttavattu as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->ttaMaVTu }}</td>
                        <td>{{ $item->ttaTenVTu }}</td>
                        <td>{{ $item->ttaDvTinh }}</td>
                        <td>{{ $item->ttaPhanTram }}</td>
                    
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
            {{ $ttavattu->links() }}
        </div>
        <button class="btn btn-primary">Them Moi</button>
    </section>
</body>
</html>
