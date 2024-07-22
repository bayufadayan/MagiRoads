<!-- tag php nanti lengkapin, setelah membuat file koneksi.php -->
<?php

include 'header.php';

?>

<br>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- nanti disini akan di ganti jika blm ada search nya maka aka menampilkan 'semua mobil' jika sudah ada maka akan menampilkna seperti dibawah -->
            <h4>Keyword Pencarian: Mustang</h4>
        </div>

        <div class="row mt-3">
            <!-- ada tag php buat for each -->
            <div class="col-sm-4">
                <div class="card">
                    <img src="assets/image/sample-mobil1.jpg" alt="mobil" class="card-img-top object-fit-cover" style="height: 200px;">
                    <div class="card-body" style="background-color: #ddd;">
                        <h5 class="card-title">
                            <!-- merk dari db -->
                            Honda
                        </h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <!-- tag php if jika status tersedia -->
                        <li class="list-group-item bg-primary text-white">
                            <i class="fa-solid fa-check"></i> Available
                        </li>
                        <!-- ini else nya -->
                        <li class="list-group-item bg-danger text-white">
                            <i class="fa-solid fa-close"></i> Not Available
                        </li>
                        <!-- Tag penutup bracket nya -->
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
            <!-- tag penutup for each dan nomer++ -->
        </div>
    </div>
</div>

<br><br><br>
<?php include 'footer.php' ?>