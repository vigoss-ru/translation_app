<html>
<head>
    <title>Shopin A Ecommerce Login</title>
    <?php include 'common.php'; ?>
</head>
<body>
<!-- header -->
<?php include 'header.php'; ?>

<!-- banner -->
<div class="banner-top">
    <div class="container">
        <h1>Register</h1>
        <em></em>
        <h2><a href="<?php echo $BASE_URL; ?>index.php">Home</a><label>/</label><label>Register</label></h2>
    </div>
</div>

<!--login-->
<div class="container">
    <div class="login">
        <form name="signupForm" class="form-horizontal" role="form">
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input type="text" placeholder="Name" required="" ng-model="signup.name">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Phone Number" required="" ng-model="signup.phone">
                    <i class="glyphicon glyphicon-phone"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Email" required="" ng-model="signup.email">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <span ng-show="signupForm.email.$error.email" class="help-inline">Email is not valid</span>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" required="" ng-model="signup.password">
                    <i class="glyphicon glyphicon-lock"></i>
                    <small class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$invalid"> Enter Password.</small>
                </div>
                <a class="news-letter" href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox"><i></i>Forget Password</label>
                </a>
                <label class="hvr-skew-backward" data-ng-disabled="signupForm.$invalid">
                    <input type="submit" value="Submit" ng-click="signUp(signup)">
                </label>
            </div>
            <div class="col-md-6 login-right">
                <h3>Completely Free Account</h3>
                <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio
                    libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                <a href="#/login" class="hvr-skew-backward">Login</a>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
<!--//login-->

<!-- brand -->
<?php include 'branch.php'; ?>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
</html>