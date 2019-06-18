<?php
    session_start();
	include("baglan.php");
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"kitap_id");
            if (!isset($_GET["kitap_id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'kitap_id' => $_GET["kitap_id"],
                    'kitapAdi' => $_POST["kitapAdi"],
				  'yazarAdi' => $_POST["yazarAdi"],
                 'yayinEvi' => $_POST["yayinEvi"],
                    'kitapFiyati' => $_POST["kitapFiyati"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="sepet.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="sepet.php"</script>';
            }
        }else{
            $item_array = array(
                'kitap_id' => $_GET["kitap_id"],
                'kitapAdi' => $_POST["kitapAdi"],
			  'yazarAdi' => $_POST["yazarAdi"],
                 'yayinEvi' => $_POST["yayinEvi"],

                'kitapFiyati' => $_POST["kitapFiyati"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["kitap_id"] == $_GET["kitap_id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Ürün sepetinizden çıkartılmıştır...!")</script>';
                    echo '<script>window.location="sepet.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alisveris Sepeti</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
                            <div class='logo mb-all-30'>
                               <img src='img/logo/klogo.png' alt='logo-image'>
                            </div>

            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                      
                        <div class="col-xl-9 col-lg-8 col-md-12 ">
                            
							
                            <div class="mobile-menu d-block d-lg-none">
                                <nav>
                                    <ul>
										<a href="index1.php">Anasayfa</a>
										<a href="sepet.php">Alisveris</a>
                                        <a href="contact.html">Bize Ulaşın</a>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>

    <div class="container" style="width: 65%">
        <h2>Alisveris Sepeti</h2>
		<div class="mobile-menu d-block d-lg-none">
                                <nav>
                                    <ul>
                                        <li><a href="sepet.php">Tüm Ürünler</a></li>
                                        <li><a href="siir.php">Şiir</a></li>
                                        <li><a href="edebiyat.php">Edebiyat</a></li>
                                        <li><a href="tarih.php">Tarih</a></li>
                                    </ul>
                                </nav>
                            </div>
        <?php
            $query = "select * from urunler order by kitap_id asc";
            $result = mysqli_query($baglanti,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3">

                        <form method="post" action="sepet.php?action=add&id=<?php echo $row["kitap_id"]; ?>">

                            <div class="product">

                                <h5 class="text-info"><?php echo $row["kitapAdi"]; ?></h5>
								<h5 class="text-info"><?php echo $row["yazarAdi"]; ?></h5>
						<h5 class="text-info"><?php echo $row["yayinEvi"]; ?></h5>

                                <h5 class="text-danger"><?php echo $row["kitapFiyati"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="kitapAdi" value="<?php echo $row["kitapAdi"]; ?>">
							 <input type="hidden" name="yazarAdi" value="<?php echo $row["yazarAdi"]; ?>">
							 <input type="hidden" name="yayinEvi" value="<?php echo $row["yayinEvi"]; ?>">

                                <input type="hidden" name="kitapFiyati" value="<?php echo $row["kitapFiyati"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Sepete Ekle">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Alisveris Sepeti Detayı</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Urun Adi</th>
	           <th width="30%">Yazar Adi</th>

                <th width="10%">Miktar</th>
                <th width="13%">Fiyat Detay</th>
                <th width="10%">Toplam Fiyat</th>
                <th width="17%">Ürünü kaldır</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["kitapAdi"]; ?></td>
							     <td><?php echo $value["yazarAdi"]; ?></td>
					     
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td> <?php echo $value["kitapFiyati"]; ?></td>
                            <td>
                                 <?php echo number_format($value["item_quantity"] * $value["kitapFiyati"], 2); ?></td>
                            <td><a href="sepet.php?action=delete&kitap_id=<?php echo $value["kitap_id"]; ?>"><span
                                        class="text-danger">Ürün çıkart</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["kitapFiyati"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">? <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
			<form action="siparis.php" method="POST">
            <input type="submit" name="gonder" value="Gonder" align="right">
            </form>
        </div>

    </div>


</body>
</html>
