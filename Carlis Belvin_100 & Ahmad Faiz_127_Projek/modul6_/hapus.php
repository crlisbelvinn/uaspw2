<?php 
include 'koneksi.php';

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE  FROM customer WHERE id=$id");

if(mysqli_affected_rows($koneksi)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href='customer.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href='customer.php';
    </script>
    ";


}
?>