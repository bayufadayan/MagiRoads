<!-- tag php nanti lengkapin, setelah membuat file koneksi.php -->
<?php

include 'header.php';

?>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">

            <div class="card">
                <div class="card-body text-center">
                    <h5>Pembayaran Dapat Melalui: </h5>
                    <hr>
                    <!-- ini nantgi nomer rek dari database infoweb -->
                    <p>920420394</p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <!-- tag php dari variavel isi takni merk -->
                        <h5>Honda</h5>
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
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Kode Booking</td>
                            <td> : </td>
                            <td>8329834842 (dari db)</td>
                        </tr>

                        <tr>
                            <td>KTP</td>
                            <td> : </td>
                            <td>8329834842 (dari db)</td>
                        </tr>

                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td>Magitas</td>
                        </tr>

                        <tr>
                            <td>Telepon</td>
                            <td> : </td>
                            <td>0867 4294 4212</td>
                        </tr>

                        <tr>
                            <td>Tanggal Sewa</td>
                            <td> : </td>
                            <td>24/5/2020</td>
                        </tr>

                        <tr>
                            <td>Lama Sewa</td>
                            <td> : </td>
                            <td>7 hari</td>
                        </tr>

                        <tr>
                            <td>Total Harga</td>
                            <td> : </td>
                            <!-- pake fungsi number fomrla -->
                            <td>Rp. 80 000</td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td> : </td>
                            <td>Paid (dari db)</td>
                        </tr>
                    </table>

                    <!-- Tag php untuk validasi pembayaran -->
                    <a href="konfirmasi.php?id=db" class="btn btn-primary float-end">
                        Konfirmasi Pembayaran
                    </a>
                    <!-- tag penutup if -->
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php include 'footer.php' ?>
