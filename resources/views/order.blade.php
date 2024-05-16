<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* * {
            border: 1px solid black;
        } */
        .container {
            margin-top: 20px;
        }
        .form-label {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 0;
        }
        .pic-container {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            height: 100%;
            text-align: center;
        }
        .pic-container img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="pic-container">
                    <div>
                        <img src="{{ asset('images/' . $product->foto) }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 align-content-center">
                <form action="{{ route('create-order') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mb-3">
                        <div class="form-group col-md-4 d-flex justify-content-end align-items-center">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                        </div>
                        <div class="form-group col-md-1 d-flex align-items-center">
                            <label>:</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $product->kode_barang }}" readonly>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-4 d-flex justify-content-end align-items-center">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                        </div>
                        <div class="form-group col-md-1 d-flex align-items-center">
                            <label>:</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $product->nama_barang }}" readonly>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-4 d-flex justify-content-end align-items-center">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                        </div>
                        <div class="form-group col-md-1 d-flex align-items-center">
                            <label>:</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="number" step="any" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" readonly>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-4 d-flex justify-content-end align-items-center">
                            <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                        </div>
                        <div class="form-group col-md-1 d-flex align-items-center">
                            <label>:</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
                        </div>
                        <input type="text" name="product_id" id="product_id" value="{{ $product->id }}" hidden>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5 d-flex justify-content-end">
                        </div>
                        <div class="form-group col-md-7 d-flex">
                            <button type="submit" class="btn btn-primary mr-2">Pesan Barang</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('script')
</body>
</html>
