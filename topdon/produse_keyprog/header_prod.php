<?php
    echo '
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Bun venit pe site-ul nostru!</p>
                    </div>
                    <div class="header-right">
                        <a href="index.php">RO</a>
                        <!-- End DropDown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="../contact.php" class="contact d-lg-show mr-0"><i class="d-icon-map"></i>Contactează-ne</a>
                        <span class="divider d-lg-show"></span>
                        <a href="../about.php" class="help d-lg-show"><i class="d-icon-info"></i> Despre noi</a>
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle mr-0">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="../index.php" class="logo d-lg-show">
                            <img src="../img/logo/logo-1.png" alt="logo" width="154" height="43" />
                        </a>
                        <!-- End Logo -->

                        <nav class="main-nav mr-4">
                            <ul class="menu justify-content-center">
                                <li class="active">
                                    <a href="../index.php">Acasă</a>
                                </li>
                                <li>
                                    <a href="../shop.php">Produse</a>
                                </li>
                                <li>
                                    <a href="../blogs.php">Bloguri</a>
                                </li>
                                <li>
                                    <a href="../about.php">Despre</a>
                                </li>
                                <li>
                                    <a href="../contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!--
                        <span class="divider d-xl-show mr-4"></span>
                        <div class="header-search hs-toggle d-xl-show">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        -->
                        <!-- End of Header Search -->
                    </div>
                    <div class="header-center d-flex d-lg-none flex-1 justify-content-center">
                        <a href="../index.php" class="logo mr-0">
                            <img src="../img/logo/logo-1.png" alt="logo" width="154" height="43" />
                        </a>
                    </div>
                    <div class="header-right">
                        <a href="tel:0040 731 649 617" class="icon-box icon-box-side mr-6 d-xl-show">
                            <div class="icon-box-icon mr-0 mr-lg-1">
                                <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                                <p>0731-649-617</p>
                            </div>
                        </a>
                    <!--
                        <a class="login-link" href="ajax/login.html" data-toggle="login-modal"><i
                                class="d-icon-user"></i></a>

                        <a href="wishlist.html" class="wishlist mr-4 d-lg-show">
                            <i class="d-icon-heart"></i>
                        </a>

                        <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle link">
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="dropdown-box">
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/cart/product-1.jpg" alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Riode White Trends</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$21.00</span>
                                            </div>
                                        </div>

                                    </div>
                    -->
                                    <!-- End of Cart Product -->
                    <!--
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/cart/product-2.jpg" alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Dark Blue Women’s
                                                Leomora Hat</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$118.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    -->
                                    <!-- End of Cart Product -->
                                <!-- End of Products  -->
                    <!--
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$139.00</span>
                                </div>
                    -->
                                <!-- End of Cart Total -->
                    <!--
                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>            
                            </div>
                    -->
                                <!-- End of Cart Action -->
                            <!-- End Dropdown Box -->
                    <!--
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </header>
    ';
?>


<!-- <div class="megamenu">
                                        <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                            <h4 class="menu-title">Diagnoză</h4>
                                            <ul>
                                                <li><a href="../diag.php">Diagnoză servis<span class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="../diag.php#profi">Diagnoză profesionistă</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                            <h4 class="menu-title">Unelte baterii</h4>
                                            <ul>
                                                <li><a href="../battery.php">Testere baterie<span class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="../battery.php#charger">Încărcătoare baterie</a></li>
                                                <li><a href="../battery.php#starter">Jump starter<span class="tip tip-new">Nou</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                            <h4 class="menu-title">Programare chei</h4>
                                            <ul>
                                                <li><a href="produse_keyprog/tninja1000.php">T-Ninja 1000<span class="tip tip-new">Nou</span></a></li>
                                            </ul>
                                        </div>
                                            <!-- End Megamenu -->
                                        </div>
                                    </div> -->