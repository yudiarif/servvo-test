<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        <h2 class="mb-4 text-center">View Product</h2>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="kodeBarang" class="form-label">Kode Barang</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $product->kode_barang }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $product->nama_barang }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="kategori" class="form-label">Kategori</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $product->kategori }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="harga" class="form-label">Harga</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="jumlahStok" class="form-label">Jumlah Stok</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="jumlah_stok" name="jumlah_stok" value="{{ $product->jumlah_stok }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="foto" class="form-label">Foto</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ asset('images/'.$product->foto)  }}" alt="foto" srcset="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="kapasitas" class="form-label">Kapasitas (kg)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any"class="form-control" id="kapasitas" name="kapasitas" value="{{ $product->kapasitas }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="tinggi" class="form-label">Tinggi (mm)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="tinggi" name="tinggi" value="{{ $product->tinggi }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="lebar" class="form-label">Lebar (mm)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="lebar" name="lebar" value="{{ $product->lebar }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="diameterTabung" class="form-label">Diameter Tabung (mm)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="diameter_tabung" name="diameter_tabung" value="{{ $product->diameter_tabung }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="beratTotal" class="form-label">Berat Total (kg)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="berat_total" name="berat_total" value="{{ $product->berat_total }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end">
                    <label for="fireRating" class="form-label">Fire Rating (Lab. DinasPMK)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="fire_rating" name="fire_rating" value="{{ $product->fire_rating }}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 d-flex">
                </div>
                <div class="form-group col-md-8">
                        <a href="{{ route('products') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
    </div>

     @include('script')
</body>
</html>
