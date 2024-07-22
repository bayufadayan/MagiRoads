<!-- tag php nanti lengkapin, setelah membuat file koneksi.php -->
<?php

include 'header.php';

?>

<br>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img src="assets/image/sample-mobil1.jpg" alt="gambar" class="card-img-top" style="height: 200px;;">
                <div class="card-body" style="background-color: #ddd;">
                    <h5 class="card-title">
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

            </div>
        </div>

        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="koneksi/proses.php?id-booking" method="post">
                        <div class="form-group mb-2">
                            <label for="">KTP</label>
                            <input type="text" class="form-control" name="ktp" required placeholder="KTP / NIK Anda">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" required placeholder="Nama Anda">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" required placeholder="Alamat">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="no_telp" required placeholder="Telepon">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Tanggal Sewa</label>
                            <input type="date" class="form-control" name="tanggal" required placeholder="Tanggal Penyewaan">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Lama Sewa</label>
                            <input type="number" class="form-control" name="lama_sewa" required placeholder="Lama Sewa">
                        </div>
                        
                        <!-- berikut value nya dari database ya jadi pakai php -->
                        <input type="hidden" value="1" name="id_login">
                        <input type="hidden" value="1" name="id_mobil">
                        <input type="hidden" value="1" name="total_harga">

                        <hr>

                        <!-- if jika tersedia tombol nya bisa di pencet, jika tidak tersedia disable -->
                        <button type="submit" class="btn btn-primary float-end">
                            Booking Now
                        </button>
                        <!-- else nya -->
                        <button type="submit" class="btn btn-primary float-end" disabled>
                            Booking Now
                        </button>

                        <!-- penutup if nya -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php include 'footer.php' ?>