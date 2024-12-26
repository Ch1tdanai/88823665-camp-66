<!DOCTYPE html>
<html lang="th">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ตารางสูตรคูณ</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-left mb-4">ตารางสูตรคูณ</h1>
        <div class="row justify-content-start">
            <div class="col-6">
                <div class="card p-4 shadow-sm">
                    <form class="d-flex flex-column align-items-center" onsubmit="showTable(); return false;">
                        <label for="base-number" class="form-label fw-bold mb-2">ระบุแม่สูตรคูณ:</label>
                        <div class="input-group mb-3">
                            <input type="number" id="base-number" class="form-control" placeholder="กรอกตัวเลข" min="1" required>
                            <button type="submit" class="btn btn-primary">แสดงตาราง</button>
                        </div>
                    </form>
                    <div id="result" class="mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTable() {
            const baseNumber = document.getElementById('base-number').value;
            let resultHTML = '<h3 class="text-success">ตารางสูตรคูณของ ' + baseNumber + '</h3>';
            resultHTML += '<ul class="list-group">';
            for (let i = 1; i <= 12; i++) {
                resultHTML += `
                    <li class="list-group-item d-flex justify-content-between">
                        <span>${baseNumber} x ${i}</span>
                        <span>${baseNumber * i}</span>
                    </li>
                `;
            }
            resultHTML += '</ul>';
            document.getElementById('result').innerHTML = resultHTML;
        }
    </script>
</body>
</html>
