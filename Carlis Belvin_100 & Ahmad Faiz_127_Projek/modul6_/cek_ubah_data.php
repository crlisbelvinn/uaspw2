<?php 
include 'koneksi.php';

if(isset($_POST["ubah"])){
    $id = $_POST["id"];
    $Nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $query = "UPDATE customer SET Nama = '$Nama', alamat = '$alamat' WHERE id='$id'";
    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='customer.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href='customer.php';
        </script>";  
    }
}

?>