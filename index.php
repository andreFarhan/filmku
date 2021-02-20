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
<body class="bg">

    <!-- sidebar -->
    <div class="sidebar-right" id="sidebar">
        <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()"> <i class="fa fa-times"></i> </button>
        <a href="index.php" class="active">HOME</a>
        <a href="filmku.php">FILMKU</a>
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
            <a href="index.php" class="active">HOME</a>
            <a href="filmku.php">FILMKU</a>
            <a href="tentang.php">TENTANG</a>
            <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- akhir nav -->

    <!-- konten -->
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-around content">
            <div class="content-left p-4">
                <h1 class="font-weight-bold text-blue">NONTON FILM</h1>
                <h1>GRATIS!</h1>
                <div class="description">
                    <h5>
                        Kumpulan Situs Web Untuk Nonton Film Gratis!
                    </h5>
                </div>
                <br>
                <a href="filmku.php" class="btn btn-primary btn-lg">CARI SITUS!</a>
            </div>

            <div class="image1">
                <img src="assets/image.png" height="500px">
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