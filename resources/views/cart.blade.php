<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>shoping</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
.container{
    direction: rtl;
}   
 </style>
</head>
<body>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    <!-- header -->
    <div class="top-header-area" id="sticker" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="/">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->
                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="/">الرئيسيه</a>
                                </li>
                                <li><a href="/about">من نحن </a></li>
                                <li><a href="#">الصفحات</a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/cart">السلة</a></li>
                                        <li><a href="/checkout">Check Out</a></li>
                                        <li><a href="/contact">تواصل معنا</a></li>
                                        <li><a href="/offers">العروض</a></li>
                                        <li><a href="/product">المنتجات</a></li>
                                    </ul>
                                </li>
                                <li><a href="/offers">العروض</a>
                                </li>
                                <li><a href="/contact">تواصل معنا</a></li>
                                <li><a href="/product">المنتجات</a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/checkout">Check Out</a></li>
                                        <li><a href="/single-product">Single Product</a></li>
                                        <li><a href="/cart">السلة</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh & Organic</p>
                            <h1>Delicious Seasonal Fruits</h1>
                            <div class="hero-btns">
                                <a href="/product" class="boxed-btn">Fruit Collection</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->
    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-image">Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th> <!-- هذا العمود يمكنك تعديله -->
                                    <th class="product-remove">remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr class="table-body-row">
                                        
                                        <td class="product-image"><img src="{{ $item->image }}" alt=""></td>
                                        <td class="product-name">{{ $item->name }}</td>
                                        <td class="product-price">${{ $item->price }} EGP</td>
										
                                        <td class="product-quantity">
                                            <form method="POST" action="/update-cart-quantity/{{ $item->id }}">
                                                @csrf
                                                <!-- باقي حقول النموذج هنا -->
                                                <input type="number" value="{{ $item->quantity }}" id="quantityInput_{{ $item->id }}" name="new_quantity" placeholder="0">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </form>
                                             </td>
                                        
											
										
                                            <td class="product-total">{{ $item->price * $item->quantity }} EGP</td>
                                            <td class="product-remove">
                                                <a href="/remove/{{ $item->id }}" class="btn btn-danger">remove</a>
                                            </td>
                                            
                                            <!-- قم بحساب الإجمالي هنا -->
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4"></td>
                                    <td class="product-total">{{ $totalPrice }} EGP</td>
                                    <td>:Total</td>
                                </tr>
                            </tbody>
                            
                        </table>
                        <div class="cart-buttons">
                            <a href="/checkout?total={{ $totalPrice }}" class="boxed-btn black">Check Out</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                            <li>support@fruitkha.com</li>
                            <li>+00 111 222 3333</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="/index">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/services">Shop</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="/welcome">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2023 - <a href="https://imransdesign.com/">ahmedmohamed</a>, All Rights
                        Reserved.<br>

                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="/assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="/assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="/assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="/assets/js/main.js"></script>
    
<!--///////////////////////////////////-->


</body>

</html>