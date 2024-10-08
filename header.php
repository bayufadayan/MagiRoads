<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>

    <!-- Boostrape dan Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="jumbotron mx-4 mt-3 mb-2">
        <div class="row">
            <div class="col-sm-8">
                <!-- Nanti ini diambil dari data base tabel infoweb = nama rental -->
                <h2 class="text-uppercase fw-bold">MagiRoad</h2>
            </div>
            <div class="col-sm-4">
                <!-- nanti actionnya ke blog.php pas udah di bikin -->
                <form action="#" class="d-flex" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bagian Navigasi -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between px-2" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Navigasi umum, dapat di akses siapa pun -->
                    <!-- Nanti href nya di isi, liat di halaman 45 -->
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#">Daftar Mobil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#">Kontak Kami</a>
                    </li>
                    <!-- Navigasi dengan session user, disini akan ada tag php untuk authentikasi ada user atau tidak -->
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#">History</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#">Profile</a>
                    </li>
                    <!-- Tag penutup dari if session nya -->
                </ul>

                <!-- Lagi lagi di sini akan ada tag untuk session user. sama percis seperti di atas -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-user ms-2 me-1"></i> Hallo, Magitas!</a> <!-- Di samping hallo akan ada tag php untuk mengambil nama user dari database-->
                    </li>

                    <li class="nav-item ">
                        <!-- Disini ada variabel url nah ini ngga tau dari mana, nanti cari tau -->
                        <a class="nav-link" aria-current="page" href="<?php echo $url ?> admin/logout.php" onclick="return confirm('Apakah anda ingin Logout?')">Logout</a>
                    </li>
                </ul>
                <!-- Tag penutup -->
            </div>
        </div>
    </nav>
