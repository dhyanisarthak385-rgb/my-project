<header class="ps-header ps-header--1">
            <div class="ps-noti">
                <div class="container">
                    <p class="m-0">Due to the <strong>COVID 19 </strong>epidemic, orders may be processed with a slight delay</p>
                </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
            </div>
            <div class="ps-header__top">
                <div class="container">
                    <div class="ps-header__text">Need help? <strong>0020 500 - MYMEDI - 000</strong></div>
                </div>
            </div>
            <div class="ps-header__middle">
                <div class="container">
                    <div class="ps-logo"><a href="index.html"> <img src="img/logo.png" alt=""><img class="sticky-logo" src="img/sticky-logo.png" alt=""></a></div><a class="ps-menu--sticky" href="#"><i class="fa fa-bars"></i></a>
                    <div class="ps-header__right">
                        <ul class="ps-header__icons">
                            <li><a class="ps-header__item open-search" href="#"><i class="icon-magnifier"></i></a></li>
                            <li><a class="ps-header__item" href="#" id="login-modal"><i class="icon-user"></i></a>
                                <div class="ps-login--modal">

<?php
if(!isset($_SESSION['user_id'])){
      ?>
    <a href="register.php"  class="ps-btn ps-btn--warning mb-2" type="submit" >ragistration</a>
     <a href="login.php"  class="ps-btn bg-info mb-2" type="submit">Log in</a>
  
     <?php
       }else{
        ?>
       <a href="my-account.php"  class="ps-btn bg-warning mb-2" type="submit">my-account</a>
       <a href="login.php"  class="ps-btn bg-info" type="submit">Logout</a>
                                  
<?php
       }?>





                                    <form method="get" action="do_action">
                                        <div class="form-group form-check">
                                            <input class="form-check-input" type="checkbox">
                                            
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </li>
                            <li><a class="ps-header__item" href="wishlist.html"><i class="fa fa-heart-o"></i><span class="badge">3</span></a></li>
                            <li><a class="ps-header__item" href="#" id="cart-mini"><i class="icon-cart-empty"></i><span class="badge">2</span></a>
                                <div class="ps-cart--mini">
                                    <ul class="ps-cart__items">
                                        <li class="ps-cart__item">
                                            <div class="ps-product--mini-cart"><a class="ps-product__thumbnail" href="product-default.html"><img src="img/products/055.jpg" alt="alt"></a>
                                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Somersung Sonic X2500 Pro White</a>
                                                    <p class="ps-product__meta"> <span class="ps-product__price">$399.99</span></p>
                                                </div><a class="ps-product__remove" href="javascript: void(0)"><i class="icon-cross"></i></a>
                                            </div>
                                        </li>
                                        <li class="ps-cart__item">
                                            <div class="ps-product--mini-cart"><a class="ps-product__thumbnail" href="product-default.html"><img src="img/products/001.jpg" alt="alt"></a>
                                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Digital Thermometer X30-Pro</a>
                                                    <p class="ps-product__meta"> <span class="ps-product__sale">$77.65</span><span class="ps-product__is-price">$80.65</span></p>
                                                </div><a class="ps-product__remove" href="javascript: void(0)"><i class="icon-cross"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="ps-cart__total"><span>Subtotal </span><span>$399</span></div>
                                    <div class="ps-cart__footer"><a class="ps-btn ps-btn--outline" href="shopping-cart.html">View Cart</a><a class="ps-btn ps-btn--warning" href="checkout.html">Checkout</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="ps-language-currency"><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupLanguage">English</a><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupCurrency">USD</a></div>
                        <div class="ps-header__search">
                            <form action="do_action" method="post">
                                <div class="ps-search-table">
                                    <div class="input-group">
                                        <input class="form-control ps-input" type="text" placeholder="Search for products">
                                        <div class="input-group-append"><a href="#"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>
                            </form>
                            <div class="ps-search--result">
                                <div class="ps-result__content">
                                    <div class="row m-0">
                                        <div class="col-12 col-lg-6">
                                            <div class="ps-product ps-product--horizontal">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                        <figure><img src="img/products/052.jpg" alt="alt"></figure>
                                                    </a></div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a>3-layer <span class='hightlight'>mask</span> with an elastic band (1 piece)</a></h5>
                                                    <p class="ps-product__desc">Study history up to 30 days Up to 5 users simultaneously Has HEALTH certificate</p>
                                                    <div class="ps-product__meta"><span class="ps-product__price">$38.24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="ps-product ps-product--horizontal">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                        <figure><img src="img/products/033.jpg" alt="alt"></figure>
                                                    </a></div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a>3 Layer Disposable Protective Face <span class='hightlight'>mask</span>s</a></h5>
                                                    <p class="ps-product__desc">Study history up to 30 days Up to 5 users simultaneously Has HEALTH certificate</p>
                                                    <div class="ps-product__meta"><span class="ps-product__price sale">$14.52</span><span class="ps-product__del">$17.24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="ps-product ps-product--horizontal">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                        <figure><img src="img/products/051.jpg" alt="alt"></figure>
                                                    </a></div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a>3-Ply Ear-Loop Disposable Blue Face <span class='hightlight'>mask</span></a></h5>
                                                    <p class="ps-product__desc">Study history up to 30 days Up to 5 users simultaneously Has HEALTH certificate</p>
                                                    <div class="ps-product__meta"><span class="ps-product__price sale">$14.99</span><span class="ps-product__del">$38.24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="ps-product ps-product--horizontal">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                        <figure><img src="img/products/050.jpg" alt="alt"></figure>
                                                    </a></div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a>Disposable Face <span class='hightlight'>mask</span> for Unisex</a></h5>
                                                    <p class="ps-product__desc">Study history up to 30 days Up to 5 users simultaneously Has HEALTH certificate</p>
                                                    <div class="ps-product__meta"><span class="ps-product__price sale">$8.15</span><span class="ps-product__del">$12.24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-result__viewall"><a href="product-result.html">View all 5 results</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-navigation">
                <div class="container">
                    <div class="ps-navigation__left">
                        <nav class="ps-main-menu">
                            <ul class="menu">
                                
                                <li class="has-mega-menu"><a href="index.php">Home</a></li>
                                <li class="has-mega-menu"><a href="about-us.php">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ps-navigation__right">Need help? <strong>0020 500 - MYMEDI - 000</strong></div>
                </div>
            </div>
        </header>
        <header class="ps-header ps-header--1 ps-header--mobile">
            <div class="ps-noti">
                <div class="container">
                    <p class="m-0">Due to the <strong>COVID 19 </strong>epidemic, orders may be processed with a slight delay</p>
                </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
            </div>
            <div class="ps-header__middle">
                <div class="container">
                    <div class="ps-logo"><a href="index.html"> <img src="img/mobile-logo.png" alt=""></a></div>
                    <div class="ps-header__right">
                        <ul class="ps-header__icons">
                            <li><a class="ps-header__item open-search" href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>