<!-- tag php nanti lengkapin, setelah membuat file koneksi.php -->
<?php

include 'header.php';

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Daftar Transaksi
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Kode Booking</th>
                                <th>Merk Mobil</th>
                                <th>Nama </th>
                                <th>Tanggal Sewa</th>
                                <th>Lama Sewa</th>
                                <th>Total Harga</th>
                                <th>Konfirmasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- for each isi dan varibel nomor -->
                            <tr>
                                <!-- ntar isi nya dari database -->
                                <td>1</td>
                                <td>89372547238</td>
                                <td>Honda</td>
                                <td>Magitas</td>
                                <td>20/02/2020</td>
                                <td>6 Hari</td>
                                <!-- Jangan lupa pake number format -->
                                <td>Rp. 30 0000</td>
                                <td>Paid</td>
                                <td>
                                    <a href="bayar.php?id=1" class="btn btn-primary" role="button">Detail</a>
                                </td>
                            </tr>
                            <!-- Tag poenutup dan nomer++ -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

