<!DOCTYPE html>
<html lang="th">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>เลขคู่และเลขคี่</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">แสดงเลขคู่และเลขคี่</h1>
        <div class="card p-4 shadow-sm">
            <form class="mb-4" onsubmit="showNumbers(); return false;">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="start" class="form-label">เริ่มต้น</label>
                        <input type="number" id="start" class="form-control" placeholder="กรอกตัวเลขเริ่มต้น" required>
                    </div>
                    <div class="col-md-6">
                        <label for="end" class="form-label">สิ้นสุด</label>
                        <input type="number" id="end" class="form-control" placeholder="กรอกตัวเลขสิ้นสุด" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100">แสดงผล</button>
            </form>
            <div id="result" class="mt-4"></div>
        </div>
    </div>

    <script>
        function showNumbers() {
            const start = parseInt(document.getElementById('start').value);
            const end = parseInt(document.getElementById('end').value);

            if (isNaN(start) || isNaN(end) || start > end) {
                document.getElementById('result').innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        โปรดกรอกตัวเลขที่ถูกต้อง โดยตัวเลขเริ่มต้นต้องน้อยกว่าหรือเท่ากับตัวเลขสิ้นสุด
                    </div>`;
                return;
            }

            let resultHTML = '<ul class="list-group">';
            for (let i = start; i <= end; i++) {
                const type = (i % 2 === 0) ? 'เลขคู่' : 'เลขคี่';
                const colorClass = (i % 2 === 0) ? 'text-success' : 'text-danger';
                resultHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>${i}</span>
                        <span class="${colorClass}">${type}</span>
                    </li>
                `;
            }
            resultHTML += '</ul>';

            document.getElementById('result').innerHTML = resultHTML;
        }
    </script>
</body>
</html>
