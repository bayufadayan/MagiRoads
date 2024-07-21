<?php
// disini akan ada tag untuk require file koneksi.php lihat halaman 46
// Lalu ini ada if untuk validasi apakah sdang ada session atau tidak

include 'header.php'

?>

<!-- Ini adalah carousel untuk mobil nya -->
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <!-- Tag php untuk query ke database dan di foreach kan, kira kita begini -->
        <li class="active" data-slide-to=1>
            <!-- didalam atribut li juga akan ada tag oho di bagiab data-slide-to dan class untuk buat class active doang -->
        </li>

        <!-- Tag pho untuk increment variabel nomer -->
    </ol>

    <div class="carousel-inner">
        <!-- tag php untuk ambil data dan juga pakai foreach -->
        <!-- nanti kelas aktiv nya juga pake tag php untuk validasi -->
        <div class="carousel-item active">
            <!-- nanti habis image/ ada tag php buat abim data dari database buat nama file gambar nya kayaknya -->
            <img src="assets/image/sample-mobil1.jpg" alt="First Slide" class="img-fluid object-fit-cover w-100" style="height: 500px;">
        </div>
        <!-- tag php increment nomor dan kurung tutup foreach -->
    </div>

    <a class="carousel-control-prev" type="button" data-bs-target="#caraoselId" data-bs-slide="prev" href="#caraoselId">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" type="button" data-bs-target="#caraoselId" data-bs-slide="next" href="#caraoselId">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="background: #ddd">
                <div class="card-body">
                    <!-- tag php untuk if session user -->
                    Selamat Datang, Magitas <!-- Ambil nama user dari session -->
                    <br><br>

                    <div class="d-flex justify-content-center gap-3">
                        <!-- Tag php if session level admin -->
                        <a href="admin/index.php" class="btn btn-primary btn-block">
                            Dashboard
                        </a>
                        <!-- Tag untuk else -->
                        <!-- <a href="blog.php" class="btn btn-primary btn-block">
                            Booking Sekarang
                        </a> -->
                        <!-- tag php bracket penutup -->
                        <a href="blog.php" class="btn btn-danger text-white btn-block">
                            Logout
                        </a>
                    </div>
                    <!-- else untuk session user di baris 45 -->
                    <form action="koneksi/proses.php?id=login" method="post">
                        <div class="d-flex justify-content-center gap-3">
                            <h5 class="card-title">Login</h5>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <div class="form-group">
                            <label for="">Usermame</label>
                            <input type="text" class="form-control" name="user" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass">
                        </div>

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <button class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modeId">Daftar</a>
                        </div>
                    </form>
                    <!-- Tag php bracket penutup else -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <!-- tag php untuk query database dan foreach -->

                <br><br>

                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/image/sample-mobil1.jpg" alt="nanti gambar nya pake php" class="card-img-top" style="height: 200px;">

                        <div class="card-body" style="background-color: #ddd;">
                            <h5 class="card-title">Merk From DB</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <!-- tag php if status tersedia -->
                            <li class="list-group-item bg-primary text-white">
                                Available
                            </li>
                            <!-- else nya -->
                            <!-- <li class="list-group-item bg-danger text-white">
                                Not Available
                            </li> -->
                            <!-- Tag penutup bracket -->

                            <li class="list-group-item bg-info text-white"><i class="fa-solid fa-check"></i> Free E-toll 50k</li>
                            <li class="list-group-item bg-dark text-white">
                                <i class="fa-solid fa-money-bill"></i> Rp. Harga di DB/day <!-- Pake Function format Number -->
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="d-flex justify-content-center gap-3">
                                <!-- didalam tag href ada tag php untuk abim id mobil nya -->
                                <a href="booking.php?id" class="btn btn-success">
                                    Booking Now
                                </a>
                                <a href="detail.php?id" class="btn btn-info">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tag php penutup foreach dan no++ -->
            </div>
        </div>
    </div>
</div>

<!-- buat modal daftar -->
<!-- atribut ny di tambah aja soalna ngga di masukun semua -->
<div class="modal fade" tabindex="-1" role="dialog" id="modeId">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Daftar Pengguna
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="koneksi/proses.php?id=daftar">
                    <div class="form-group">
                        <label for="">Nama Pengguna</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="user" required>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="pass" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>