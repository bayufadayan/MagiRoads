<!-- tag php nanti lengkapin, setelah membuat file koneksi.php -->
<?php

include 'header.php';

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 object-fit-cover">
            <!-- biasa ini gambar nya dari database -->
            <img src="assets/image/sample-mobil1.jpg" alt="mobil" class="card-img-top w-100">
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <!-- merk dari database -->
                    <h4 class="card-title">
                        Honda
                    </h4>
                    <p class="card-text">
                        Deskripsi:
                        Deskripi ini nanti nya akan di ambil dari database sehingga saya hanya menuslikan sample saja
                    </p>
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
                    <hr>

                    <div class="d-flex justify-content-center gap-3">
                        <!-- didalam tag href ada tag php untuk abim id mobil nya -->
                        <a href="booking.php?id" class="btn btn-success">
                            Booking Now
                        </a>
                        <a href="index.php" class="btn btn-info">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<?php include 'footer.php' ?>