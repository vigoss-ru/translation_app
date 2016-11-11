<html>
    <head>
        <title>Shopin A Ecommerce Product Lists</title>
        <?php include 'common.php'; ?>
    </head>
    <body>
    <!-- header -->
    <?php include 'header.php'; ?>

    <!-- banner -->
    <div class="banner-top">
        <div class="container">
            <h1>Login</h1>
            <em></em>
            <h2><a href="<?php echo $BASE_URL; ?>index.php">Home</a><label>/</label><label>Login</label></h2>
        </div>
    </div>

    <!-- content -->
    <div class="product">
        <div class="container">
            <div class="col-md-3 product-bottom">
                <div class="rsidebar span_1_of_left">
                    <h4 class="cate">Categories</h4>
                    <ul class="menu-drop">
                        <li class="item1">
                            <a href="#">Men</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.php">Cute Kittens</a></li>
                                <li class="subitem2"><a href="product.php">Strange Stuff</a></li>
                                <li class="subitem3"><a href="product.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item2">
                            <a href="#">Women</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.php">Cute Kittens</a></li>
                                <li class="subitem2"><a href="product.php">Strange Stuff</a></li>
                                <li class="subitem3"><a href="product.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item3">
                            <a href="#">Kids</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.php">Cute Kittens</a></li>
                                <li class="subitem2"><a href="product.php">Strange Stuff</a></li>
                                <li class="subitem3"><a href="product.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item4">
                            <a href="#">Accessories</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.php">Cute Kittens</a></li>
                                <li class="subitem2"><a href="product.php">Strange Stuff</a></li>
                                <li class="subitem3"><a href="product.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item4">
                            <a href="#">Shoes</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.php">Cute Kittens</a></li>
                                <li class="subitem2"><a href="product.php">Strange Stuff</a></li>
                                <li class="subitem3"><a href="product.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $(function() {
                            var menu_ul = $('.menu-drop > li > ul'),
                                menu_a  = $('.menu-drop > li > a');
                            menu_ul.hide();
                            menu_a.click(function(e) {
                                e.preventDefault();
                                if(!$(this).hasClass('active')) {
                                    menu_a.removeClass('active');
                                    menu_ul.filter(':visible').slideUp('normal');
                                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                                } else {
                                    $(this).removeClass('active');
                                    $(this).next().stop(true,true).slideUp('normal');
                                }
                            });

                        });
                    </script>
                </div>
            </div>
            <div class="col-md-9">
                <div class="mid-popular">

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.php">Set up perspiciati</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc1.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc1.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="<?php echo $BASE_URL; ?>single.php">At vero eos</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc2.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc2.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.php">At vero eos</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc3.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc3.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.php">At vero eos</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc4.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc4.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.php">At vero eos</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 item-grid1 simpleCart_shelfItem">
                        <div class="mid-pop">
                            <div class="pro-img">
                                <img src="<?php echo $BASE_URL; ?>images/pc5.jpg" class="img-responsive" alt="">
                                <div class="zoom-icon">
                                    <a class="picture" href="<?php echo $BASE_URL; ?>images/pc5.jpg" rel="title" class="b-link-stripe b-animate-go thickbox">
                                        <i class="glyphicon glyphicon-search icon"></i>
                                    </a>
                                    <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                </div>
                            </div>
                            <div class="mid-1">
                                <div class="women">
                                    <div class="women-top">
                                        <span>Women</span>
                                        <h6><a href="single.php">At vero eos</a></h6>
                                    </div>
                                    <div class="img item_add">
                                        <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mid-2">
                                    <p><label>$100.00</label><em class="item_price">$70.00</em></p>
                                    <div class="block">
                                        <div class="starbox small ghosting"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <!-- end content -->

    <!-- brand -->
    <?php include 'branch.php'; ?>

    <!-- footer -->
    <?php include 'footer.php'; ?>

    </body>
</html>