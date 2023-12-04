<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VASTlaundry - Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-container {
            margin-top: 100px; 
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-primary-subtle fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <p class="fs-3">VASTlaundry</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VASTlaundry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
    </div>
</body>
<body>
    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
                            <a class="nav-link" href="syaratnketentuan.php">Syarat & Ketentuan</a>
                            <a class="nav-link" href="lokasi.php">Lokasi</a>
                            <a class="nav-link" href="transaksi.php">Info Transaksi</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            </nav>
    </body> 
    <body>
        <br>
        <br>
        <br>
    <div class="container mt-4 form-container">
                <div class="mb-3">
                    <label for="namapelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="name" class="form-control" id="namapelanggan" rows="3"
                        style="height: 30px; width: 500px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nomor HP</label>
                    <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                        style="height: 30px; width: 500px;">
                </div>
                <form>
    <div class="mb-3">
        <label for="dropdown" class="form-label" >Jenis Layanan</label>
        <select id="dropdown" name="dropdown" class="form-select" style="height: 50px; width: 500px;">
            <option value="pilihan1">Express</option>
            <option value="pilihan2">Regular</option>
        </select>
    </div>
    
</form>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Total Pakaian</label>
                    <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                        style="height: 30px; width: 500px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Harga Total</label>
                    <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                        style="height: 30px; width: 500px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Harga Bayar</label>
                    <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                        style="height: 30px; width: 500px;">
                </div>
            </div>
    </body>

</html>