<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1>Barang</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Category</td>
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Jumlah Barang</td>
        </tr>
        @foreach($barang as $item)
            <tr>
                <td><?php echo $item->id;?></td>
                <td><?php echo $item->category_barang;?></td>
                <td><?php echo $item->nama_barang;?></td>
                <td><?php echo $item->harga_barang;?></td>
                <td><?php echo $item->jumlah_barang;?></td>
                <td><a class="btn btn-primary" href="/edit/{{$item->id}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{ route('deletebarang', ['id'=> $item->id])  }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>