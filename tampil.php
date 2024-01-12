<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                         <a href="index.html" class="logo">Sorum<em> TIREG</em></a>

                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="cars.html">Cars</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href="about.html">About Us</a>
                                    
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="login2.html">Admin</a></li>  
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" id="top">
        <div class="image-thumb">
            <img src="assets/images/evoo.jpg" alt="" style="background-size: cover; width: 100%; height: 110vh;">
        </div>

        <div class="video-overlay header-text">
            <div class="caption">

            <div align="center"class= "pt-5 pb-5"><h3 style="font-style: oblique; color: #660000 "><b>Data Pembelian</h3></div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <table class="table table-bordered bg-light">  
        <tr align="center"class="table"style="background-color: #ffd95f">
            <td>Nama</td>
            <td>alamat</td>
            <td>TipeMobil</td>
            <td>kreditlunas</td>
            <td>Warna</td>
            <td>Notelepon</td>
            <td>Keterangan</td>
            <td>Option</td>
        </tr>
        <?php
        Include "koneksi.php";
        $tampil = "select * from form";
        $sql = mysqli_query($koneksi,$tampil);
        while($data=mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo $data["Nama"] ?></td>
            <td><?php echo $data["alamat"] ?></td>
            <td><?php echo $data["TipeMobil"] ?></td>
            <td><?php echo $data["kreditlunas"] ?></td>
            <td><?php echo $data["Warna"] ?></td>
            <td><?php echo $data["Notelepon"] ?></td>
            <td><?php echo $data["Keterangan"] ?></td>
            <td><a href="hapus.php?id=<?= $data['Nama']?>">Hapus </a> | <a href="edit.php?id=<?= $data['Nama']?>">Edit</a>
            </td>

        </tr>
        <?php } ?>
    </table>
    <br>
    <div align="center">
    <a class="btn btn-warning" href="pesan.php" role="button" align=center>Isi Data Kembali</a>
</div>
    </div>
</div>
<div class="col-2">

</div>            
            
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   

   
                    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 By TIREG
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>