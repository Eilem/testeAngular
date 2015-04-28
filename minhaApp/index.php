<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br" />
        
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-route.min.js"></script>
        <script  type="text/javascript" src="/inicializacao.js"></script>
        <script type="text/javascript" src="/Controllers/ListarCtrl.js"></script>
    </head>
    <body ng-app="minhaapp">
        <header>
            
        </header>
        
        <section ng-controller="ListarCtrl">
            <div >
                <a href="#/listar">Listar</a>
            </div>
            <div ng-view>
                
            </div>
        </section>
        
        <footer>
            
        </footer>
    </body>
</html>
