<?php
if(isset($_POST["email"])){
	$kime = "arsemre75@gmail.com";
	$konu = $_POST["subject"];
	
	$mesaj = $_POST["message"];
	$baslik = "From : ".$_POST["name"]."<".$_POST["email"].">\r\n";
	$baslik .= "Reply to : arsemre75@gmail.com\r\n";
	
	if(mail($kime,$konu,$mesaj,$baslik)){
		echo "Emailiniz basariyla gönderilmistir.";
	}
	else
		echo "Emailiniz gönderilemedi.";
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kitap Diyarı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="css/linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main Wrapper Start Here -->
		
       <!-- Banner Popup Start -->

        <!-- Banner Popup End -->
       <!-- Newsletter Popup Start -->
        <!-- Newsletter Popup End -->

        <!-- Main Header Area Start Here -->
        <header>
		
		
            <!-- Header Top Start Here -->
			
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->
            
            <!-- Mobile Vertical Menu Start End -->
        </header>
		
		<ul class="header-bottom-list d-flex">
                                    <li><a href="index1.php">Anasayfa<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="sepet.php">Alisveris<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="contact.php">Bize Ulasın<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                </ul>
        <!-- Main Header Area End Here -->
        <!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner pb-50 off-white-bg home-3">
            
            <!-- Container End -->
            <!-- Slider Area Start Here -->
            <div class="slider_box">
                <div class="slider-wrapper theme-default">
                    <!-- Slider Background  Image Start-->
                    <div id="slider" class="nivoSlider">
                        
                    </div>
                    <!-- Slider Background  Image Start-->
                </div>
            </div>
            <!-- Slider Area End Here -->            
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="image-banner pb-30 off-white-bg">
            <div class="container">
                <div class="col-img">
                    
                </div>
            </div>
            <!-- Container End -->
        </div>
		
		<b><center><h1> Bize Ulasin </b></center> </h1>
		
		        <div class="contact-area ptb-100 ptb-sm-60">
            <div class="container">
                
                <p class="text-capitalize mb-20">İstek öneri ve sikayetlerinizi bu kısımdan bize ulastirabilirsiniz.</p>
                <form id="contact-form" class="contact-form" action="mailgonder.php" method="post">
                    <div class="address-wrapper row">
                        <div class="col-md-12">
                            <div class="address-fname">
                                <input class="form-control" type="text" name="name" placeholder="İsim">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-email">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-subject">
                                <input class="form-control" type="text" name="subject" placeholder="Konu">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-textarea">
                                <textarea name="message" class="form-control" placeholder="Mesajınızı yaziniz."></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="footer-content mail-content clearfix">
                        <div class="send-email float-md-right">
                            <input value="Submit" class="return-customer-btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Brand Banner Area End Here -->
        <!-- Trending Products End Here -->
        <!-- Trending Products End Here -->
        <!-- Trending Products End Here -->
        
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->

</body>

</html>
