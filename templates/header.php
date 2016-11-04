<div class="header">
    <div class="container">
        <div class="head">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo $BASE_URL; ?>images/logo.png">
                </a>
            </div>
        </div>
    </div>

    <div class="header-top">
        <div class="container">
            <div class="col-sm-5 header-login col-md-offset-2">
                <ul>
                    <?php
                        session_start();
                    ?>

                    <?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != ''){ ?>
                        <li>Welcome <?=$_SESSION['name'];?> ! </li>
                        <li><a href="#" ng-click="logout();">Logout</a></li>
                    <?php } else {?>
                        <li><a href="<?php echo $BASE_URL; ?>#/login">Login</a></li>
                        <li><a href="<?php echo $BASE_URL; ?>#/register">Register</a></li>
                    <?php }?>
                    <li><a href="<?php echo $BASE_URL; ?>templates/checkout.php">Checkout</a></li>
                </ul>
            </div>
            <div class="col-sm-5 header-social">
                <ul>
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                    <li><a href="#"><i class="ic4"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div class="container">
        <div class="head-top">
            <div class="col-sm-8 col-md-offset-2 h_menu4">
                <?php include 'menu.php'; ?>
            </div>
            <div class="col-sm-2 search-right">
                <ul class="heart">
                    <li>
                        <a href="wishlist.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                    </li>
                    <li>
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"></i></a>
                    </li>
                </ul>
                <div class="cart box_1">
                    <a href="checkout.php">
                        <h3>
                            <div class="total">
                                <span class="simpleCart_total">$0.00</span>
                            </div>
                            <img src="<?php echo $BASE_URL; ?>images/cart.png" alt=""/>
                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a> </p>
                </div>
                <div class="clearfix"> </div>
                <!-- popup box -->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login-search">
                            <input type="submit" value=""/>
                            <input type="text" value="Search..." onfocus="this.value='';" onblur="if(this.value == ''){this.value = 'Search...';}"/>
                        </div>
                        <p>Shopin</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>