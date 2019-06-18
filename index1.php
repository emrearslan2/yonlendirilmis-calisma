<?php

 

include("baglan.php");

session_start();

 

//eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.

 

if(!isset($_SESSION["login"])){

 echo "</center>";

echo "<h2>Kitap Diyarı</h2>";
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
echo "<br> <a href=\"/proje/login1.php\">Giriş Yap</a>";
echo "<br> <a href=\"/proje/kayit.php\">Hesap oluştur</a>";

 echo "</center>";

}else{

 

echo "<a href=\"logout.php\">Çıkış Yap</a>";
echo"<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Kitap Diyarı</title>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Favicons -->
    <link rel='shortcut icon' href='img/favicon.ico'>
    <!-- Fontawesome css -->
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <!-- Ionicons css -->
    <link rel='stylesheet' href='css/ionicons.min.css'>
    <!-- linearicons css -->
    <link rel='stylesheet' href='css/linearicons.css'>
    <!-- Nice select css -->
    <link rel='stylesheet' href='css/nice-select.css'>
    <!-- Jquery fancybox css -->
    <link rel='stylesheet' href='css/jquery.fancybox.css'>
    <!-- Jquery ui price slider css -->
    <link rel='stylesheet' href='css/jquery-ui.min.css'>
    <!-- Meanmenu css -->
    <link rel='stylesheet' href='css/meanmenu.min.css'>
    <!-- Nivo slider css -->
    <link rel='stylesheet' href='css/nivo-slider.css'>
    <!-- Owl carousel css -->
    <link rel='stylesheet' href='css/owl.carousel.min.css'>
    <!-- Bootstrap css -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <!-- Custom css -->
    <link rel='stylesheet' href='css/default.css'>
    <!-- Main css -->
    <link rel='stylesheet' href='style.css'>
    <!-- Responsive css -->
    <link rel='stylesheet' href='css/responsive.css'>

    <!-- Modernizer js -->
    <script src='js/vendor/modernizr-3.5.0.min.js'></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class='browserupgrade'>You are using an <strong>outdated</strong> browser. Please <a href='https://browsehappy.com/'>upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class='wrapper'>
        <!-- Banner Popup Start -->
        <div class='popup_banner'>
            <span class='popup_off_banner'>×</span>
            <div class='banner_popup_area'>
                    <img src='img/banner/kbanner.jpg' alt=''>
            </div>
        </div>
        <!-- Banner Popup End -->
       <!-- Newsletter Popup Start -->
        <div class='popup_wrapper'>
            <div class='test'>
                <span class='popup_off'>Close</span>
                <div class='subscribe_area text-center mt-60'>
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Truemart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class='subscribe-form-group'>
                        <form action='#'>
                            <input autocomplete='off' type='text' name='message' id='message' placeholder='Enter your email address'>
                            <button type='submit'>subscribe</button>
                        </form>
                    </div>
                    <div class='subscribe-bottom mt-15'>
                        <input type='checkbox' id='newsletter-permission'>
                        <label for='newsletter-permission'>Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Main Header Area Start Here -->
        <header>
            <!-- Header Top Start Here -->
            <div class='header-top-area'>
                <div class='container'>
                    
                            
                                <!-- Dropdown End -->
                            </li> 
                        </ul>
                    </div>
                    <!-- Header Top End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
			
            <!-- Header Middle Start Here -->
            <div class='header-middle ptb-15'>
                <div class='container'>
                    <div class='row align-items-center no-gutters'>
                        <div class='col-lg-3 col-md-12'>
                            <div class='logo mb-all-30'>
                               <img src='img/logo/klogo.png' alt='logo-image'>
                            </div>
                        </div>
                      
                        <!-- Categorie Search Box End Here -->
                        <!-- Cart Box Start Here -->
                        <div class='col-lg-4 col-md-12'>
                            <div class='cart-box mt-all-30'>
                                <ul class='d-flex justify-content-lg-end justify-content-center align-items-center'>
                                 
                                 
                                    <li><a href='/proje/logout.php'><i class='lnr lnr-user'></i><span class='my-cart'><span> <strong>Çıkış Yap</strong> </span><span>  Tekrar Bekleriz</span></span></a>



                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class='header-bottom  header-sticky'>
                <div class='container'>
                    <div class='row align-items-center'>
                                       
                        <div class='col-xl-9 col-lg-8 col-md-12 '>
                            <nav class='d-none d-lg-block'>
                                <ul class='header-bottom-list d-flex'>

                                  <li><a href='index1.php'>Anasayfa</a></li>

                                    <li><a href='sepet.php'>Alışveriş</a></li>
                                    <li><a href='contact.php'>Bize Ulaşın</a></li>
                                </ul>
                            </nav>
                            <div class='mobile-menu d-block d-lg-none'>
                                <nav>
                                    <ul>
                                        <li><a href='index.html'>home</a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul>
                                                <li><a href='index.html'>Home Version 1</a></li>
                                                <li><a href='index-2.html'>Home Version 2</a></li>
                                                <li><a href='index-3.html'>Home Version 3</a></li>
                                                <li><a href='index-4.html'>Home Version 4</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href='shop.html'>shop</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href='product.html'>product details</a></li>
                                                <li><a href='compare.html'>compare</a></li>
                                                <li><a href='cart.html'>cart</a></li>
                                                <li><a href='checkout.html'>checkout</a></li>
                                                <li><a href='wishlist.html'>wishlist</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href='blog.html'>Blog</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href='single-blog.html'>blog details</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href='#'>pages</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href='register.html'>register</a></li>
                                                <li><a href='login.html'>sign in</a></li>
                                                <li><a href='forgot-password.html'>forgot password</a></li>
                                                <li><a href='404.html'>404</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href='about.html'>about us</a></li>
                                        <li><a href='contact.html'>contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
  
            <!-- Mobile Vertical Menu Start End -->
        </header>
        <!-- Main Header Area End Here -->
        <!-- Categorie Menu & Slider Area Start Here -->
        <div class='main-page-banner pb-50 off-white-bg'>
            <div class='container'>
                <div class='row'>
               
<h1>Kitap Diyarına Hoşgeldiniz</h1>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        
            <!-- Container End -->
        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->
    <script src='js/vendor/jquery-3.2.1.min.js'></script>
    <!-- Countdown js -->
    <script src='js/jquery.countdown.min.js'></script>
    <!-- Mobile menu js -->
    <script src='js/jquery.meanmenu.min.js'></script>
    <!-- ScrollUp js -->
    <script src='js/jquery.scrollUp.js'></script>
    <!-- Nivo slider js -->
    <script src='js/jquery.nivo.slider.js'></script>
    <!-- Fancybox js -->
    <script src='js/jquery.fancybox.min.js'></script>
    <!-- Jquery nice select js -->
    <script src='js/jquery.nice-select.min.js'></script>
    <!-- Jquery ui price slider js -->
    <script src='js/jquery-ui.min.js'></script>
    <!-- Owl carousel -->
    <script src='js/owl.carousel.min.js'></script>
    <!-- Bootstrap popper js -->
    <script src='js/popper.min.js'></script>
    <!-- Bootstrap js -->
    <script src='js/bootstrap.min.js'></script>
    <!-- Plugin js -->
    <script src='js/plugins.js'></script>
    <!-- Main activaion js -->
    <script src='js/main.js'></script>

</body>
</html>";


 

}

 

?>

 



