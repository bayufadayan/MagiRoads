<?php
// require '../koneksi/koneksi.php';
// $title = 'Dashboard';
include 'header.php';

// if (empty($_SESSION['USER'])) {
//     session_start();
// }

// if (!empty($_POST['nama_rental'])) {
//     $data[] = htmlspecialchars($_POST["nama_rental"]);
//     $data[] = htmlspecialchars($_POST["telp"]);
//     $data[] = htmlspecialchars($_POST["alamat"]);
//     $data[] = htmlspecialchars($_POST["email"]);
//     $data[] = htmlspecialchars($_POST["no_rek"]);
//     $data[] = 1;

//     $sql = "UPDATE infoweb SET nama_rental = ?, telp = ?, alamat = ?, email= ?, no_rek = ? WHERE id = ?";
//     $row = $koneksi->prepare($sql);
//     $row->execute($data);

//     echo '<script>alert("Update Data Info Website Berhasil!"); window.location="index.php";)</script>';
//     exit;
// }

// if (!empty($_POST['nama_pengguna'])) {
//     $data[] = htmlspecialchars($_POST["nama_pengguna"]);
//     $data[] = htmlspecialchars($_POST["username"]);
//     $data[] = md5($_POST["password"]);
//     $data[] = $_SESSION['USER']['id_login'];

//     $sql = "UPDATE login SET nama_pengguna = ?, username = ?, password = ? WHERE id_login = ? ";
//     $row = $koneksi->prepare($sql);
//     $row->execute($data);

//     echo '<script>alert("Update data profile berhasil!"); window.location="index.php";)</script>';
//     exit;
// }

?>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Info Website
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <!-- <?php
                                // $sql = "SELECT * FROM infoweb WHERE id = 1";
                                // $row = $koneksi->prepare($sql);
                                // $row->execute();
                                // $edit = $row->fetch(PDO::FETCH_OBJ);
                                ?> -->

                        <div class="form-group">
                            <label for="">Nama Rental</label>
                            <!-- <input type="text" name="nama_rental" id="nama_rental" value="<?= $edit->nama_rental; ?>" class="form-control"> -->
                            <input type="text" name="nama_rental" id="nama_rental" value="Magix Car Rent" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <!-- <input type="text" name="email" id="email" class="form-control" value="<?= $edit->email; ?>"> -->
                                    <input type="text" name="email" id="email" class="form-control" value="haha@gmail.com">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <!-- <input type="text" name="telp" id="telp" class="form-control" value="<?= $edit->email; ?>"> -->
                                    <input type="text" name="telp" id="telp" class="form-control" value="088727319  ">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control">
                                <?php $edit->alamat; ?>
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="">No. Rekening</label>
                            <textarea name="no_rek" id="no_rek" class="form-control">
                                <?php $edit->no_rek; ?>
                            </textarea>
                        </div>

                        <button class="btn btn-primary" type="submit">Simpam</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Profil Admin
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <!-- ntar aja dah cape -->
                        <!-- <?php
                                // $id = $_SESSION["USER"]["id_login"];
                                // $sql = "SELECT * FROM login WHERE id_login = ?";
                                // $row = $koneksi->prepare($sql);
                                // $row->execute(array($id));

                                // $edit_profil = $rowfetch
                                ?> -->

                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <!-- <input type="text" name="nama_rental" id="nama_rental" value="<?= $edit->nama_rental; ?>" class="form-control"> -->
                            <input required type="text" name="nama_pengguna" id="nama_pengguna" value="Fadayan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <!-- <input type="text" name="nama_rental" id="nama_rental" value="<?= $edit->nama_rental; ?>" class="form-control"> -->
                            <input type="text" name="username" id="username" value="@bayufadayan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <!-- <input type="text" name="nama_rental" id="nama_rental" value="<?= $edit->nama_rental; ?>" class="form-control"> -->
                            <input type="password" name="password" id="password" value="jdskjdhsd" class="form-control">
                        </div>

                        <button class="btn btn-primary" type="submit">Simpam</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<?php include 'footer.php' ?>