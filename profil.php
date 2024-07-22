<?php

include 'header.php';

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <!-- Tah php -->

                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <input type="text" class="form-control" value="dari db" name="nama_pengguna" id="nama_pengguna" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="">Username</label>
                            <input type="text" class="form-control" value="dari db" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" value="dari db" name="password" id="password" value="" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php include 'footer.php' ?>