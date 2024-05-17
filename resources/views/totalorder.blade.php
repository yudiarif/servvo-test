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
        <h3 class="my-5 text-center">Total Order</h3>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Harga Unit</th>
                    <th>Total Harga</th>
                    <th class="table-actions">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                    $totalBayar = 0;
                @endphp
                @foreach ($totalOrder as $total)
                <tr>

                    <td>{{ $no }}</td>
                    <td>{{ $total->product->nama_barang }}</td>
                    <td>
                <form action="{{ route('total-order-update', $total->id) }}" method="POST" class="form-inline">
                @csrf
                @method('PUT')
                <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $total->jumlah_pesanan }}">
                <button type="submit" class="btn btn-primary btn-sm ml-2">Update</button>
            </form>
                    </td>
                    <td>{{ $total->product->harga }}</td>
                    @php
                        $totalHarga = $total->product->harga * $total->jumlah_pesanan;
                         $totalBayar += $totalHarga;
                        @endphp
                    <td>{{ $totalHarga }}</td>
                    <td class="table-actions">
                        <div class="btn-group">
                            <form action="{{ route('total-order-delete', $total->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm mx-1">Delete</button>
                            </form>
                            <button class="btn btn-success btn-sm mx-1" data-toggle="modal" data-target="#view{{ $total->id }}">View</button>
                        <div class="modal fade" id="view{{ $total->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Lihat Pesanan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             Kode Barang : {{ $total->product->kode_barang }}
                             <br>
                             Nama Barang : {{ $total->product->nama_barang }}
                             <br>
                             Kategori : {{ $total->product->kategori  }}
                             <br>
                             Harga : {{ $total->product->harga }}
                             <br>
                             Jumlah Pesan : {{ $total->jumlah_pesanan }}
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                <tr>
                    <td class="text-center" colspan="3"></td>
                    <td>Total</td>
                    <td>{{ $totalBayar }}</td>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            <button type="#" class="btn btn-primary">Finish</button>
        </div>


    </div>



   @include('script')
</body>
</html>
