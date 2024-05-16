<!-- navbar.html -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">SERVVO</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Input Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Input Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products-list') }}">List Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('total-order') }}">List SO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
