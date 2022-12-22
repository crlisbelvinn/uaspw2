<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
    header ("location:login1.php");
  }
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
  
$customer = query("SELECT * FROM customer
            ORDER BY nama ASC");
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
            <a href="florist.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="tambah_data.php"><i class="fa-solid fa-plus"></i><span>Tambah Data Customer</span></a>
            <a href=""><i class="fa-sharp fa-solid fa-gear"></i><span>Atur Data</span></a>
            <a href="aksi_logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">
      <table border="0" border-collapse="collapse" width="100%" id="tampil">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>alamat</th>
        </thead>

        <tbody>
            <?php $i=1 ?>
            <?php foreach($customer as $cst) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cst["Nama"];?></td>
                <td><?php echo $cst["alamat"];?></td>
                <td  class="tabel_aksi">
                    <a href="ubah.php?id=<?php echo $cst["id"]; ?>" id="tbl-ubah"><i class="fa-solid fa-pen-to-square"></i>Ubah</a>
                    <a href="hapus.php?id=<?php echo $cst["id"]; ?>" id="tbl-hapus"><i class="fa-solid fa-trash-can"></i>Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
      </table>  
    </div>
    <script src="script.js"></script>
</body>
</html>