var app = angular.module('articleList', ['ui.bootstrap']);

app.filter('startFrom', function () {
    return function (input, start) {
        if(input) {
            start = +start;
            return input.slice(start);
        }
        return [];
    }
});

app.controller('articleListCrtl', function ($scope, $http, $timeout) {

    $http.get('../api/v1/articles.php').success(function(data) {
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter
        $scope.totalItems = $scope.list.length;
    });

    $scope.filter= function () {
        $timeout(function () {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };

    $scope.setPage = function (pageNo) {
        $scope.currentPage = pageNo;
    };

    $scope.sort_by = function (isReverse) {
        predicate = $('#product-sorting').val();
        $scope.predicate = predicate;
        if(isReverse) {
            $scope.reverse = !$scope.reverse;
        }
    };

    $scope.sortData = {
        model: null,
        availableOptions: [
            {id: 'article_name', name: 'Name'},
            {id: 'article_price_discount', name: 'Price'}
        ]
    };

});


