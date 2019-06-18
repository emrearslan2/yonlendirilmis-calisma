<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">


        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                    <li>
                        <a class="active-menu" href="adminindex.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>
                    <li>
                        <a href="urunekle.php"><i class="fa fa-desktop "></i>Urun Ekle <span class="fa arrow"></span></a>
                    </li>  
                    <li>
                        <a href="adminlistele.php"><i class="fa fa-desktop "></i>Urun Listele <span class="fa arrow"></span></a>
                    </li>   					
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Anasayfa</h1>
                        <h1 class="page-subhead-line">Sitenizi yönetmek için menüyü kullanabilirsiniz. </h1>

                    </div>
                </div>
				
				      <form action="" method="POST">
                            <input type="text" name="kategori_adi"  placeholder="kategori adi"><br><br><br>
                            <input type="text" name="kitapAdi"  placeholder="kitapAdi"><br><br><br>
                            <input type="text" name="yazarAdi" placeholder="yazarAdi"><br><br><br>
                             <input type="text" name="yayinEvi" placeholder="yayinEvi"> <br>   <br><br>                               
						<input type="text" name="kitapFiyati" placeholder="kitapFiyati"><br><br><br>
                             <input type="number" name="kitapAdedi" placeholder="kitapAdedi"> <br>   <br><br>                               
						
                            <div class="form-button"><br>
                                <button id="submit" type="submit" ><font color="#77b800">Kitap Ekle</font></button>
                            </div>
</form>
                <!-- /. ROW  -->

                <!-- /. ROW  -->

                
                    <!--/.Chat Panel End-->
                </div>
                <!-- /. ROW  -->



                <!--/.Row-->
                <hr />
                <!--/.Row-->
                <hr />

                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; Emre Arslan <a href="" target="_blank"></a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
		<?php
if($_POST){
	$kategori_adi = $_POST['kategori_adi'];
	$kitapAdi = $_POST['kitapAdi'];
	$yazarAdi = $_POST['yazarAdi'];
	$yayinEvi = $_POST['yayinEvi'];
	$kitapFiyati = $_POST['kitapFiyati'];
    $kitapAdedi = $_POST['kitapAdedi'];

	$ekle = "INSERT INTO urunler (kategori_adi, kitapAdi, yazarAdi, yayinEvi, kitapFiyati,kitapAdedi) VALUES ('$kategori_adi', '$kitapAdi', '$yazarAdi','$yayinEvi','$kitapFiyati','$kitapAdedi')";
	$sorgulama = mysqli_query($baglanti, $ekle);
	if ($ekle != TRUE){
		echo "Kaydınız sağlanamadı";
	}
	else{
		header("Location: adminindex.php");
	}
}
?>
