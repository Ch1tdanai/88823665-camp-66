<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>ตารางสูตรคูณแม่ {{ $number }}</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ตัวตั้ง</th>
                <th>ตัวคูณ</th>
                <th>ผลลัพท์</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 12; $i++)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $i }}</td>
                    <td>{{ $number * $i }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>
