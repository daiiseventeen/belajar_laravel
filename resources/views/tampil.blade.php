<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>
<body>

    <h2>data siswa</h2>

    @foreach($data_siswa as $data)
        <li>{{ $data }}</li>
    @endforeach
</body>
</html>
