app.controller('ListarCtrl', function($scope, $http){
    $http.get('http://localhost:8080/service/mercadoria/')
        .then(function(response){
            $scope.mercadorias = response.data.conteudo;
            console.log($scope.mercadorias);
        })
        .catch(function(response){
            
        })
    ;
});