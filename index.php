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

<!-- lanjut line 44 -->