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
<body class="bg3">

    <!-- sidebar -->
    <div class="sidebar-right" id="sidebar">
        <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()"> <i class="fa fa-times"></i> </button>
        <a href="index.php">HOME</a>
        <a href="filmku.php">FILMKU</a>
        <a href="tentang.php" class="active">TENTANG</a>
    </div>
    <!-- akhir sidebar -->

    <!-- nav -->
    <nav class="navbar justify-content-between mb-3">
        <div class="logo">
             <a href="index">
                <img src="assets/logo%20filmku.png" class="mt-2" height="75px">
             </a>
        </div>
        
        <div class="menu">
            <a href="index.php">HOME</a>
            <a href="filmku.php">FILMKU</a>
            <a href="tentang.php" class="active">TENTANG</a>
            <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- akhir nav -->

    <!-- konten -->
    <div class="container">
        <div class="d-sm-flex justify-content-around content">
            <div class="content-left pr-5 pt-3">
                <h1 class="font-weight-bold text-blue">TENTANG SITUS FILMKU</h1>
                <h3>Situs ini dibuat untuk mempermudah orang-orang mencari situs web film!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 ml-5">                
                <h2 class="font-weight-bold text-blue mt-4">SPECIAL THANKS</h2>
                <h3>getbootstrap.com</h3>
                <h3>fontawesome.com</h3>
                <h3>freepik.com</h3>
                <h3>alibabacloud.com</h3>
                <h3>codepolitan.com</h3>
            </div>
            <div class="col-6">
                <h2 class="font-weight-bold text-blue mt-4">MY PROFILE</h2>
                <div class="form social">
                    <a href="https://www.instagram.com/andre._.farhan/"><img src="assets/instagram.png" height="50"> andre._.farhan</a>
                </div>
                <div class="form social">                    
                    <a href="https://m.facebook.com/profile.php?id=100010371725300&ref=content_filter"><img src="assets/facebook.png" height="82"> andre farhan saputra</a>
                </div>
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