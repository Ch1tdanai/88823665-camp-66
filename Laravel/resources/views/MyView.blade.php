<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <form method="POST" action="/multiplication">
        @csrf
        <label for="number">เลือกแม่สูตรคูณ:</label>
        <select name="number" id="number">
            @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}" {{ $i == $selectedNumber ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
        <button type="submit">ดูตาราง</button>
    </form>

    <h2>แม่ {{ $selectedNumber }}</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>สูตรคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($multiplicationTable as $index => $result)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $selectedNumber }} × {{ $index + 1 }}</td>
                    <td>{{ $result }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
