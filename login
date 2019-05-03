<?php include("baglan.php"); ?>
<html>
<body bgcolor="#F34723"><center>
<font color="#98FF98"><h1>Kullanici Girisi</h1></font>
<form action="" method="POST">
                            <input type="text" name="email" placeholder="Email adresinizi giriniz...">
                            <input type="password" name="password" placeholder="Şifre">
                            <div class="form-button"><br>
                                <button id="submit" type="submit" ><font color="#F34723">Giris</font></button>
                            </div>

                            </body>
                            </html>
                            <?php include("baglan.php"); ?><br><br><br>
<?php
if($_POST){
    $sql = "select * from girisler where email='$_POST[email]' and password='$_POST[password]'";
    $sorgu = mysqli_query($baglanti, $sql);
    if (mysqli_num_rows($sorgu) >= 1) {
        header("Location: /proje/index-3.html");
    }
    else{
        echo "Hatalı Giris Yaptiniz Tekrar Deneyiniz.";
    }
}
?></center>
