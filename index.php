<html ng-app="myApp">
<head>
    <title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <?php include 'templates/common.php'; ?>
</head>

<body ng-cloak="">
    <div data-ng-view="" id="ng-view" class="slide-animation">
    </div>
</body>
<toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
<!-- Angular JS -->

<script src="<?php echo $BASE_URL; ?>js/angular/angular.min.js"></script>
<script src="<?php echo $BASE_URL; ?>js/angular/angular-route.min.js"></script>
<script src="<?php echo $BASE_URL; ?>js/angular/angular-animate.min.js" ></script>
<script src="<?php echo $BASE_URL; ?>js/angular/toaster.js"></script>
<script src="<?php echo $BASE_URL; ?>js/app/app.js"></script>
<script src="<?php echo $BASE_URL; ?>js/app/data.js"></script>
<script src="<?php echo $BASE_URL; ?>js/app/directives.js"></script>
<script src="<?php echo $BASE_URL; ?>js/app/authCtrl.js"></script>

</html>
