<?php

    require "koneksi.php";

    $sql = "SELECT * FROM website ORDER BY status_website DESC";
    $eksekusi = mysqli_query($koneksi, $sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMKU</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="icon" href="assets/logo.png">
</head>
<body class="bg2">

    <!-- sidebar -->
    <div class="sidebar-right" id="sidebar">
        <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()"> <i class="fa fa-times"></i> </button>
        <a href="index.php">HOME</a>
        <a href="filmku.php" class="active">FILMKU</a>
        <a href="tentang.php">TENTANG</a>
    </div>
    <!-- akhir sidebar -->

    <!-- nav -->
    <nav class="navbar justify-content-between mb-3">
        <div class="logo">
             <a href="index.php">
                <img src="assets/logo%20filmku.png" class="mt-2" height="75px">
             </a>
        </div>
        
        <div class="menu">
            <a href="index.php">HOME</a>
            <a href="filmku.php" class="active">FILMKU</a>
            <a href="tentang.php">TENTANG</a>
            <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- akhir nav -->

    <!-- konten -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="font-weight-bold text-blue">DAFTAR SITUS WEB NONTON FILM</h1>
                <table class="table bgc text-white">
                    <thead>
                        <th>NO.</th>
                        <th>STATUS</th>
                        <th>NAMA SITUS</th>
                        <th>LINK SITUS</th>
                    </thead>
                    <tbody class="font-weight-bold">
                    <?php $i=1; foreach ($eksekusi as $data) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <?php if ($data['status_website'] == "active"): ?>
                                <p class="badge badge-success"><?= strtoupper($data['status_website']); ?></p>
                            <?php else: ?>
                                <p class="badge badge-danger"><?= strtoupper($data['status_website']); ?></p>
                            <?php endif ?>
                        </td>
                        <td><?= $data['nama_website']; ?></td>
                        <td class="link"><a href="<?= $data['link_website']; ?>"><?= $data['link_website']; ?></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- akhir konten -->

</body>

<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    function sidebarOpen(){
        document.getElementById("sidebar").style.transform = "translateX(0px)";
    }
    function sidebarClose(){
        document.getElementById("sidebar").style.transform = "translateX(300px)";
    }
</script>

</html>