<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Test Page</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Hello World!</h1>
        <a href="<?= url('test'); ?>">url</a>
        <h3>{{ $id }}</h3>
    </div>
</body>
</html>