<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "modul6_";
    $koneksi = mysqli_connect($host, $user, $pass, $name) or die ("koneksi ke database gagal");
    mysqli_select_db($koneksi, $name);

    function query($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
?>

