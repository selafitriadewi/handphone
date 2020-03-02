<?php
session_start();
//Koneksi ke databases
 $koneksi = new mysqli("localhost","root","","trainittoko");

// $conn = mysqli_connect("localhost","root","","trainittoko");

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bawazir Store : Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-dark bg-primary  " style="margin-bottom: 0">
            <div class="navbar-header navbar-light">
                <button type="button" class=" navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-sm-8">
                <a class="navbar-brand bg-primary" href="index.php">Admin</a> 
            </div>
            </div>
  <!-- <div style="color: white;
padding: 15px 60px 5px 50px;
float: right;
font-size: 16px;"> Last Access : <?php $tgl=date('d-m-y'); echo $tgl; ?> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side " role="navigation">
            <div class="sidebar-collapse " style="background-color: #e3f2fd;">
                <ul class="nav"style="background-color: #e3f2fd;" id="main-menu">
					
                    <li>
                        <a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:36px"></i> Biodata</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=produk"><i class="fa fa-inbox" style="font-size:36px"></i> Produk</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=pembelian"><i class="fa fa-money " style="font-size:36px"></i> Pembelian</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=pelanggan"><i class="fa fa-group" style="font-size:36px"></i> Pelanggan</a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-window-restore" style="font-size:36px"></i> Store</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-window-restore" style="font-size:36px"></i> Logout</a>
                    </li>
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if(isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk") 
                    {
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian") 
                    {
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan") 
                    {
                        include 'pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="detail") 
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk") 
                    {
                        include 'tambahproduk.php';
                    }
                     elseif ($_GET['halaman']=="tambahpelanggan") 
                    {
                        include 'tambahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk") 
                    {
                        include 'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="store") 
                    {
                        include '../index.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk") 
                    {
                        include 'ubahproduk.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
