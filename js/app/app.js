var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster']);

app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
        when('/login', {
            title: 'Login',
            templateUrl: 'templates/login.php',
            controller: 'authCtrl'
        })
        .when('/logout', {
            title: 'Logout',
            templateUrl: 'templates/dashboard.php',
            controller: 'logoutCtrl'
        })
        .when('/register', {
            title: 'Register',
            templateUrl: 'templates/register.php',
            controller: 'authCtrl'
        })
        .when('/dashboard', {
            title: 'Dashboard',
            templateUrl: 'templates/dashboard.php',
            controller: 'authCtrl'
        })
        .when('/', {
            title: 'Login',
            templateUrl: 'templates/dashboard.php',
            controller: 'authCtrl',
            role: '0'
        });
    }])
    .run(function ($rootScope, $location, Data) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
            $rootScope.authenticated = false;
            Data.get('session').then(function (results) {
                if (results.uid) {
                    $rootScope.authenticated = true;
                    $rootScope.uid = results.uid;
                    $rootScope.name = results.name;
                    $rootScope.email = results.email;
                } /*else {
                    var nextUrl = next.$$route.originalPath;
                    if (nextUrl == '/signup' || nextUrl == '/login') {

                    } else {
                        $location.path("/login");
                    }
                }*/
            });
        });
    });