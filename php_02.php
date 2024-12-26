<!DOCTYPE html>
<html lang="th">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>เลขคู่และเลขคี่</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center text-primary mb-4">แสดงเลขคู่และเลขคี่</h1>
        <div id="number-list" class="row gy-3"></div>
    </div>
    <script>
        const list = document.getElementById('number-list');
        for (let i = 1; i <= 100; i++) {
            const type = (i % 2 === 0) ? 'เลขคู่' : 'เลขคี่';
            const color = (i % 2 === 0) ? 'text-success' : 'text-danger';
            list.innerHTML += `
                <div class="col-6">
                    <div class="p-3 border rounded shadow-sm d-flex justify-content-between align-items-center">
                        <span>${i}</span>
                        <span class="${color}">${type}</span>
                    </div>
                </div>
            `;
        }
    </script>
</body>
</html>
