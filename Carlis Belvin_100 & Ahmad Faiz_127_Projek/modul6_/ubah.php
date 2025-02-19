<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
    header ("location:login1.php");
  }
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }

$id = $_GET["id"];

$cst = query("SELECT * FROM customer WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/6.15.0/simpleicons.svg">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home Admin</title>
</head>
<body>
    <header>
       <div class="left_area">
            <h3>Belle Florist</h3>  
       </div>

       <div class="right_area">
            <i class="fa-solid fa-bars" id="btn"></i>
       </div>
    </header>

    <div class="sidebar">
        <div class="logo_profile">
            <img src="asset/jumaku.png " class="logo" alt="" width="200px" >
        </div>
            
        <div class="menu">
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang, Admin</span></p>
            <a href="index.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="tambah_data.php"><i class="fa-solid fa-plus"></i><span>Tambah Pegawai</span></a>
            <a href="setting_data.php"><i class="fa-sharp fa-solid fa-gear"></i><span>Atur Data</span></a>
            <a href="aksi_logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">

    <form action="cek_ubah_data.php" method="POST" id="tambah">
        <center>
        <h1>Ubah Data </h1>
        <input type="hidden" name="id" id="id" value="<?php echo $cst["id"]; ?>">
        <table width="80%" id="tambah">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td ><input type="text" name="nama" id="nama" required value="<?php echo $cst["Nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="alamat" name="alamat" id="alamat" required value="<?php echo $cst["alamat"]; ?>" ></td>
            </tr>
         
    
        </table>

        <button type="submit" name="ubah">Ubah</button>
        </center>
    </form>
    </div>

    <script src="script.js"></script>
</body>
</html>