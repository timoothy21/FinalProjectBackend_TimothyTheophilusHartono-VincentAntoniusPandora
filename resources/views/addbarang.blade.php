<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Barang</h1>
    <form action="/store" method="Post">
        @csrf
        <label for="category_barang">Category Barang:</label>
        <input type="text" name="category_barang"> <br>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang"> <br>
        <label for="harga_barang">Harga Barang:</label>
        <input type="text" name="harga_barang"> <br>
        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="text" name="jumlah_barang"> <br>

        <input type="submit" value="Input Barang">
    </form>
</body>
</html>