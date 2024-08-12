<?php

    $user = 'root';
    $pass = '';

    $koneksi = new PDO("mysql:host=localhost:8080;dbname=rental_mobil", $user, $pass);

    global $url;
    $url = "http://localhost:8080/rental_mobil-master";

    $sql_web = "SELECT * FROM infoweb WHERE id = 1";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();

    global $infoweb;
    $infoweb = $row_web->fetch(PDO::FETCH_OBJ);

    error_reporting(0);

?>
