<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br" />
    </head>
    <body ng-app="minhaapp">
        <header>
            
        </header>
        
        <section>
            <div >
                <a href="#/listar">Listar</a>
            </div>
            <div ng-view>
                
            </div>
        </section>
        
        <footer>
            
        </footer>
        
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
        <script src="minhaApp/inicializacao.js"></script>
        <script src="minhaApp/Controllers/ListarCtrl.js"></script>
 
    </body>
</html>