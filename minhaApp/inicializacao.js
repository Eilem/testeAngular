var app = angular.module('minhaapp', ['ngRoute']);

app.config(function($routeProvider){
    
    $routeProvider.when('listar',{
        controller: 'ListarCtrl',
        templateUrl: 'minhaApp/Views/listar.html'
    });
    
});