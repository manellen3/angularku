<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <script src="lib/angular.min.js"></script>
        <title>Angularku</title>
    </head>
    <body>
        <div ng-controller="myController1">
            <input type="text" name="name" ng-model="name" />
            <h1>Hello <span ng-bind="name"></span></h1>
            <h1>Hi {{name}} {{9*9}}</h1>
            <hr>
            <input type="text" name="firstName" ng-model="firstName" />
            <br />
            <input type="text" name="lastName" ng-model="lastName" />
            <p>Your full name: {{firstName + " " + lastName}}</p>
        </div>
        <div></div>
        <script>
            var a = angular.module('myApp',[]);
            a.controller('myController1', function($scope){
                $scope.firstName = "Nyoman";
                $scope.lastName = "Hellen";
            });
        </script>
    </body>
</html>
