<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .navbar-nav a {
            margin-right: 10px;
        }
        .table-actions {
            text-align: center;
        }
    </style>
</head>
<body>
@include('navbar')
    
    <div class="container">
        <h3 class="my-5 text-center">Daftar Product</h3>
         <table class="table table-bordered mb-5">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Jumlah Stok</th>
                    <th class="table-actions">Action</th>
                </tr>
            </thead>
            <tbody>
                 @php
                    $no = 1;
                @endphp
                @foreach ($products as $product)
                <tr>

                    <td>{{ $no }}</td>
                    <td>{{ $product->kode_barang }}</td>
                    <td>{{ $product->nama_barang }}</td>
                    <td>{{ $product->kategori }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->jumlah_stok }}</td>
                        
                    
                   <td class="table-actions">
                        <a class="btn btn-info btn-sm" href="{{ route('order', $product->id) }}">Pesan</a>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>

     @include('script')
</body>
</html>
