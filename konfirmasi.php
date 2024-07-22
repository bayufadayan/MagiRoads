<?php

include 'header.php';

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center flex-column">
                        <h3>Pembayaran dapat melalui:</h3>
                        <hr>
                        <p class="text-center">BRI 438287749 A/N Rental MagiRoads</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="koneksi/proses.php?id=konfirmasi" method="post" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td>Kode Booking</td>
                                <td>:</td>
                                <td>8949328593 (DB)</td>
                            </tr>
                            <tr>
                                <td>No rekening</td>
                                <td>:</td>
                                <td><input type="text" name="no_rekening" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Atas Nama</td>
                                <td>:</td>
                                
                                <td><input type="text" name="nnama" required class="form-control"></td>
                                
                            </tr>
                            <tr>
                                <td>Nominal</td>
                                <td>:</td>
                                
                                <td><input type="text" name="nominal" required class="form-control"></td>
                                
                            </tr>
                            <tr>
                                <td>Tanggal Transfer</td>
                                <td>:</td>
                                
                                <td><input type="date" name="tgl" required class="form-control"></td>
                                
                            </tr>
                            <tr>
                                <td>Total yang Harus di Bayar</td>
                                <td>:</td>
                                <!-- Biasa dari db dan number format -->
                                <td>Rp. 50.000</td>
                            </tr>
                            <tr>
                                <td>Bukti</td>
                                <td>:</td>
                                <td>
                                    <input type="file" name="foto" class="input-control" required>
                                </td>
                            </tr>
                        </table>

                        <!-- value id nya dari database -->
                        <input type="hidden" name="id_booking" value="4">
                        <button class="btn btn-primary float-end" type="submit">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php include 'footer.php' ?>