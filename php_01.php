<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <?php $myvar = 2; ?>
        <h1 class="mb-4">สูตรคูณแม่ <?php echo $myvar; ?></h1>
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <div class="row mb-2 align-items-center">
                <div class="col-1 text-end">
                    <strong><?php echo $myvar; ?> x <?php echo $i; ?> = </strong>
                </div>
                <div class="col-1 text-start">
                    <strong><?php echo $myvar * $i; ?></strong>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
