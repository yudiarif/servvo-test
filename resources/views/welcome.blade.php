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
        <div class="d-flex justify-content-center min-vh-100 align-items-center">
            <div class="">
                <button class="btn btn-primary"><a href="{{ route('profile') }}" class="text-white px-3">Profile</a></button>
                <button class="btn btn-primary"><a href="{{ route('products') }}" class="text-white px-3">Product</a></button>
                <button class="btn btn-primary"><a href="{{ route('products-list') }}" class="text-white px-3">Product List</a></button>
                <button class="btn btn-primary"><a href="{{ route('total-order') }}" class="text-white px-3">Total Order</a></button>
            </div>

        </div>
    </div>

     @include('script')
</body>
</html>
