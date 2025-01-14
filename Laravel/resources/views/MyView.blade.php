<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <!-- รวม Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ตารางสูตรคูณ</h1>

        <!-- Form สำหรับรับค่าจากผู้ใช้ -->
        <form method="POST" action="{{ url('/multiplication') }}">
            @csrf
            <div class="form-group">
                <label for="multiplier">กรุณาระบุแม่สูตรคูณ:</label>
                <input type="number" class="form-control" id="multiplier" name="multiplier" required>
            </div>
            <button type="submit" class="btn btn-primary">แสดงตารางสูตรคูณ</button>
        </form>

        <!-- แสดงตารางสูตรคูณหากมีการส่งข้อมูล -->
        @if(isset($table))
        <h3 class="mt-5">ตารางสูตรคูณของ {{ $multiplier }}:</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>เลขที่</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
            <tbody>
                @foreach($table as $row)
                <tr>
                    <td>{{ $row['number'] }}</td>
                    <td>{{ $row['result'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <!-- รวม Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
