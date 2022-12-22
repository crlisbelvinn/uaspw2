<?php 
    include "koneksi.php";{  
    $sql = "INSERT INTO customer(Nama,alamat) VALUES ('$_POST[nama]','$_POST[alamat]')";
    $query = mysqli_query($koneksi,$sql);
    header("location:customer.php");

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