<?php  include'baglan.php'; ?>
<?php  include'header.php'; ?>
<?php  include'sidebar.php'; ?>

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Admin Panel</h1>
                        <h1 class="page-subhead-line">Sitenizi yönetmek için sol taraftaki menüleri kullanabilirsiniz. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


            </div>
            <!-- /. PAGE INNER  -->
        </div>
<?php  include'footer.php'; ?>
<?php
if($_POST){
	$id = $_POST['id'];
    $kitapadi = $_POST['kitapadi'];
    $yayinevi = $_POST['yayinevi'];
    $kitapadedi = $_POST['kitapadedi'];
    $fiyat = $_POST['fiyat'];
    $ekle = "INSERT INTO urunler (id, kitapadi, yayinevi, kitapadedi,fiyat) VALUES ('$id', '$kitapadi', '$yayinevi','$kitapadedi','$fiyat')";
    $sorgulama = mysqli_query($baglanti, $ekle);
    if ($ekle != TRUE){
        echo "Kaydınız sağlanamadı";
    }
    else{
        header("Location:/proje/login1.php");
    }
}
?>
