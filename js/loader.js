var app = angular.module('APP', []);

app.controller('MainHead', function( $scope ){
    $scope.title = 'eGadżet';
});

app.controller('Warpper', function( $scope ) {
    $scope.view = {
        getView : function( i ) {
            return "section/" + i + ".html";
        }
    };
});

app.controller('ArticleLoader', function( $scope, $http ) {
    $scope.articles = [];

    var onRepos = function(response) {

      $scope.articles = response.data;
    };

    var onError = function (reason) {
        $scope.error = "Nie można pobrać informacji";
    };
            
    $http.get(location.href + "data/articles.json")
          .then(onRepos,onError);
});