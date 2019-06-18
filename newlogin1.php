
<?php include("baglan.php"); ?>
<html>
<body><center>
<img src='img/logo/klogo.png' alt='logo-image'>
<font color="#154734"><h2>Kullanici Girisi</h2></font>
<form action="" method="POST">
                            <input type="text" name="email" placeholder="Email adresinizi giriniz...">
                            <input type="password" name="password" placeholder="Şifre">
                            <div class="form-button"><br>
                                <button id="submit" type="submit" ><font color="#77b800">Giris</font></button>
                            </div>

                            </body>
                            </html>
                            <?php include("baglan.php"); ?><br><br><br>




<?php
session_start();

ob_start();
if($_POST){
    $sql = "select * from girisler where email='$_POST[email]' and password='$_POST[password]'";
    $sorgu = mysqli_query($baglanti, $sql);
    if (mysqli_num_rows($sorgu) >= 1) {
        $_SESSION["login"] = "true";

        $_SESSION["email"] = $email;

        $_SESSION["password"] = $password;
        header("Location: /proje/index1.php");
    }
    else{
        echo "kullanıcı bilgileri eşleşmedi";
    }
}

?>






</center>
