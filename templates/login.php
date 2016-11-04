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
            <h1>Login</h1>
            <em></em>
            <h2><a href="<?php echo $BASE_URL; ?>index.php">Home</a><label>/</label><label>Login</label></h2>
        </div>
    </div>

    <!--login-->
    <div class="container">
        <div class="login">
            <form name="loginForm" class="form-horizontal" role="form">
                <div class="col-md-6 login-do">
                    <div class="login-mail">
                        <input type="text" placeholder="Email" required="" ng-model="login.email" focus>
                        <i class="glyphicon glyphicon-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Password" required="" ng-model="login.password">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox1"><input type="checkbox" name="checkbox"><i></i>Forget Password</label>
                    </a>
                    <label class="hvr-skew-backward" data-ng-disabled="loginForm.$invalid">
                        <input type="submit" value="Login" ng-click="doLogin(login)" data-ng-disabled="loginForm.$invalid">
                    </label>
                </div>
                <div class="col-md-6 login-right">
                    <h3>Completely Free Account</h3>
                    <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio
                        libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                    <a href="#/register" class="hvr-skew-backward">Register</a>
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