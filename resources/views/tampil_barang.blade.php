<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil barang</title>
</head>
<body>

    @foreach($Barang as $data)
        <p>{{ $data-> id}}</p>
        <p>{{ $data-> nama_barang}}</p>
        <p>{{ $data-> merk}}</p>
        <p>{{ $data-> harga}}</p>
        <hr>
    @endforeach

</body>
</html>
