<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Profile</title>
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
        <h2 class="mb-4 text-center">Input Profile</h2>
   
         <form action="{{ route('profile') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="namaCustomer" class="form-label">Nama Customer</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="nama_customer" name="nama_customer">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="noTelepon" class="form-label">No. Telepon</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="alamat" class="form-label text-center">Alamat</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="kota" class="form-label">Kota</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="kota" name="kota">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="provinsi" class="form-label">Provinsi</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="provinsi" name="provinsi">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="kodePos" class="form-label">Kode Pos</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="noNpwp" class="form-label">No. NPWP</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="nomor_npwp" name="nomor_npwp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="totalDiskon" class="form-label">Total Diskon (%)</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="total_diskon" name="total_diskon">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 d-flex justify-content-end align-items-center">
                    <label for="creditLimit" class="form-label">Credit Limit Transaksi</label>
                </div>
                <div class="form-group col-md-1 d-flex align-items-center">
                    <label>:</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="number" step="any" class="form-control" id="credit_limit_transaksi" name="credit_limit_transaksi">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 d-flex">
                </div>
                <div class="form-group col-md-8">
                       <button type="submit" class="btn btn-primary">Input</button>
                       <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </div>
        </form>
        
       
    </div>

     @include('script')
</body>
</html>
