<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="/update/{{ $item->id }}" method="POST">
        @csrf
        <!-- {{ csrf_field() }} -->
        {{ method_field('PUT') }}
        <label for="category_barang">Category Barang:</label>
        <input type="text" name="category_barang" value="{{ $item->category_barang}}"> <br>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="{{ $item->nama_barang}}"> <br>
        <label for="harga_barang">Harga Barang:</label>
        <input type="text" name="harga_barang" value="{{ $item->harga_barang}}"> <br>
        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="text" name="jumlah_barang" value="{{ $item->jumlah_barang}}"> <br>

        <input type="submit" value="Input Barang">
    </form>
</body>
</html>