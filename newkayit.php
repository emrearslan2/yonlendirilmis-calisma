
<?php include("baglan.php"); ?>
<html>
<body><center>
<img src='img/logo/klogo.png' alt='logo-image'>
<font color="#154734"><h1>Kullanici Kayit</h1></font>
<form action="" method="POST">
                            <input type="text" name="ad"  placeholder="Ad"><br><br><br>
                            <input type="text" name="soyad"  placeholder="Soyad"><br><br><br>
                            <input type="text" name="email" placeholder="Email adresinizi giriniz..."><br><br><br>
                             <input type="text" name="adres" placeholder="Adresininzi giriniz..."> <br>   <br><br>                               
							<input type="password" name="password" placeholder="Şifre"><br><br><br>
                            <div class="form-button"><br>
                                <button id="submit" type="submit" ><font color="#77b800">Kayıt Ol</font></button>
                            </div>

                            </body>
                            </html>
                            <?php include("baglan.php"); ?><br><br><br>
							
							
							<?php
if($_POST){
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$email = $_POST['email'];
	$adres = $_POST['adres'];
	$password = $_POST['password'];
	$ekle = "INSERT INTO girisler (ad, soyad, email, adres, password) VALUES ('$ad', '$soyad', '$email','$adres','$password')";
	$sorgulama = mysqli_query($baglanti, $ekle);
	if ($ekle != TRUE){
		echo "Kaydınız sağlanamadı";
	}
	else{
		header("Location: /proje/login1.php");
	}
}
?>
