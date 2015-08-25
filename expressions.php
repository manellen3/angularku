<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <script src="lib/angular.min.js"></script>
        <title>Angularku | AngularJS Expressions Samples</title>
    </head>
    <body>
        <h1>AngularJS Expressions Samples</h1>
        <div>
            <h2>Angular directives and expressions sample's</h2>
            <input type="text" name="name" ng-model="name" />
            <h3>Hello <span ng-bind="name"></span>!</h3>
            <h3>Hi {{name}} you are great {{9*9}}!</h3>
        </div>
        <hr>
        <div ng-controller="myController1">
            <h2>Angular module and controller sample</h2>
            <p>First name:<br /><input type="text" name="firstName" ng-model="firstName" /></p>
            <p>Last name:<br /><input type="text" name="lastName" ng-model="lastName" /></p>
            <p>Your full name: <b>{{firstName + " " + lastName}}</b></p>
        </div>
        <hr>
        <h2>Expression and ng-init to initiate Number (value notation/initiation)</h2>
        <div ng-init="a=10;b=5;">
            <p>
                a = {{a}} <br />
                b = {{b}}
            </p>
            <p>Total a * b = {{a*b}}</p>
            <p>Total a * b = <span ng-bind="a*b"></span></p>
            {{a=10;b=5;}}
            <p>Total a * b = {{a*b}}</p>
        </div>
        <hr>
        <h2>Expression and ng-init to initiate String (value notation/initiation)</h2>
        <div ng-init=" c='Nyoman Hellen'; d='Paramita';">
            <p>My full name <span ng-bind="c + ' ' + d"></span></p>
        </div>
        <hr>
        <h2>Expression and ng-init to initiate Object (value notation/initiation)</h2>
        <div ng-init="car={name:'Terios',brand:'Daihatsu',year:2013}">
            <p>My car is {{car.name + ', ' + car.brand + ', ' + car.year}}</p>
        </div>
        <hr>
        <h2>Expression and ng-init to initiate Array (value notation/initiation)</h2>
        <div ng-init="dogs=['Pensil','Cingcing','Pilo','Raja','Jeff']">
            <p>My dogs are {{dogs[0] + ', ' + dogs[1] + ', ' + dogs[2] + ', ' + dogs[3] + ' and ' + dogs[4]}}</p>
        </div>
                
        <script>
//            var a = angular.module('myApp',[]);
//            a.controller('myController1', function($scope){
//                $scope.firstName = "Nyoman Hellen";
//                $scope.lastName = "Paramita";
//            });
            
            var b = angular.module('myApp',[]);
            b.controller('myController1',['$scope',function($author){
                    $author.firstName = 'Nyoman Hellen',
                    $author.lastName = 'Pramita'
            }]);
        </script>
    </body>
</html>
