<header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end" >

                        <div class="col-12 col-lg-8">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo2.png" alt="" style="margin-left:-110px;" width=500px></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn"  target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Your Bag $20</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-10.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img style="float:left"; src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div width=""class="main_header_area">
                
                <div class="container h-100 ">
                <div  class="content-justify-auto header-right-side-menu ml-15 mb-10" >
                                        <a href="#" id="sideMenuBtn" style="margin-top:-50px;margin-left:-100px"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                    <div class="row h-100">
                    
                        <div class="col-12 d-md-flex justify-content-between">
                        
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <!-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.php">Home</a>
                                                    <a class="dropdown-item" href="shop.php">Shop</a>
                                                    <a class="dropdown-item" href="product-details.php">Product Details</a>
                                                    <a class="dropdown-item" href="cart.php">Cart</a>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </div>
                                            </li> -->
                                            <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                                            <!-- <li class="nav-item"><a class="nav-link" href="#">Shoes</a></li> -->
                                            <li class="nav-item"><a class="nav-link" href="customize.php">Customize</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Order</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="my_order.php">Custom order</a>
                                                    <a class="dropdown-item" href="my_order1.php">Order</a>
                                                   
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Button code goes here -->
                            </div>
                            
                            <!-- Help Line -->
                        <?php if(!isset($_SESSION['u_id'])){ ?>
                            <div class="help-line">
                                <a href="login.php">LOGIN</a>
                            </div>
                            <?php } else{?>
                                <div class="help-line">
                                <a href="controller/logout.php">LOGOUT</a>
                            </div>
                                <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </header>