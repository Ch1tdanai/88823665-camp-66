<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">ตารางสูตรคูณ</h1>

        <!-- ฟอร์มรับค่าแม่สูตรคูณ -->
        <form method="POST" action="/multiplication">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">กรอกแม่สูตรคูณ</label>
                <input type="number" class="form-control" id="number" name="number" required min="1" max="12" value="{{ old('number') }}">
                @error('number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">แสดงตาราง</button>
        </form>

        <!-- แสดงผลตารางสูตรคูณ -->
        @if(isset($table))
            <h3 class="mt-5">ตารางสูตรคูณของ {{ $number }}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ตัวเลข</th>
                        <th>ผลคูณ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table as $index => $result)
                        <tr>
                            <td>{{ $number }} x {{ $index + 1 }}</td>
                            <td>{{ $result }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
