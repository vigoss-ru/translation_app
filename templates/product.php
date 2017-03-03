<html ng-app="articleList">
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
                <div class="mid-popular" ng-controller="articleListCrtl">

                    <div class="product-row item-grid1">
                        <div class="col-md-3">
                            PageSize:
                            <select ng-model="entryLimit" class="form-control">
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                                <option>50</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            Filter:<input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control">
                        </div>
                        <div class="col-md-3">
                            Sort by:
                            <div class="product-sort">
                                <i class="glyphicon glyphicon-sort" ng-click="sort_by(true)"></i>
                                <select class="form-control" id="product-sorting" ng-change="sort_by(false)" ng-model="sortData.model">
                                    <option ng-repeat="option in sortData.availableOptions" value="{{option.id}}">{{option.name}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="product-row" ng-show="filteredItems > 0">
                        <div class="col-md-4 item-grid1 simpleCart_shelfItem"
                             ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">

                            <div class="mid-pop">
                                <div class="pro-img">
                                    <img ng-src="<?php echo $BASE_URL; ?>{{data.image_link}}" class="img-responsive" alt="">
                                    <div class="zoom-icon">
                                        <a class="picture" href="<?php echo $BASE_URL; ?>{{data.image_link}}" rel="title" class="b-link-stripe b-animate-go thickbox">
                                            <i class="glyphicon glyphicon-search icon"></i>
                                        </a>
                                        <a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                    </div>
                                </div>
                                <div class="mid-1">
                                    <div class="women">
                                        <div class="women-top">
                                            <span>Women</span>
                                            <h6><a href="single.php">{{data.article_name}}</a></h6>
                                        </div>
                                        <div class="img item_add">
                                            <a href="#"><img src="<?php echo $BASE_URL; ?>images/ca.png" alt=""></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>${{data.article_price_origin}}</label><em class="item_price">${{data.article_price_discount}}</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-row" ng-show="filteredItems == 0">
                        <h4> No customers found </h4>
                    </div>

                    <div class="product-row" ng-show="filteredItems > 0">
                        <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems"
                             items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;">
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

    <script src="<?php echo $BASE_URL; ?>js/app/article.js"></script>
    <script src="<?php echo $BASE_URL; ?>js/ui-bootstrap-tpls-0.10.0.min.js"></script>
</html>