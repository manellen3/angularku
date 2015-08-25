<!DOCTYPE html>
<html ng-app="FiltersApp">
    <head>
        <meta charset="UTF-8">
        <script src="lib/angular.min.js"></script>
        <title>Angularku | AngularJS Filters Samples</title>
    </head>
    <body>
        <h1>AngularJS Filters Samples - Uppercase filter</h1>
        <div ng-controller="PersonController">
            <h3>My bio's</h3>
            <p>Name: {{name|uppercase}}</p>
            <p>Age: {{age|uppercase}}</p>
            <p>Sex: <span ng-bind="sex|uppercase"></span></p>
            <i>Not satisfied with your name? Hmm...</i>
            <p>Name<br />
                <input type="text" ng-model="name" /></p>
            <p>Age<br />
                <input type="text" ng-model="age" /></p>
            <p>Sex<br />
                <input type="text" ng-model="sex" /></p>
            {{printBio()}}
        </div>
        <hr>
        <h1>AngularJS Filters Samples - Lowercase filter</h1>
        <div ng-controller="DogController">
            <h3>My dogs</h3>
            <ul>
                <li ng-repeat="x in dogs">{{(x.name | lowercase) + ", " + (x.age + " years old." | uppercase)}}</li>
            </ul>
        </div>
        <hr>
        <h1>AngularJS Filters Samples - Currency filter</h1>
        <div ng-init="q=5;price=5000;">
            <h3>Auto convert to currency</h3>
            <p>Product quantity: {{q}}</p>
            <p>Product price: {{price}}</p>
            <p>Total: {{(q*price) | currency}}</p>
        </div>
        <hr>
        <h1>AngularJS Filters Samples - Order by filter</h1>
        <div ng-controller="DogController">
            <h3>My dogs</h3>
            <ul>
                <li ng-repeat="x in dogs | orderBy:'age'">{{(x.name | uppercase) + ", " + (x.age + " years old." | lowercase)}}</li>
            </ul>
        </div>
        <hr>
        <h1>AngularJS Filters Samples - Input filter</h1>
        <div ng-controller="DogController">
            <h3>My dogs</h3>
            <p>Filter by dogs name:<br /><input type="text" ng-model="name" /></p>
            <ul>
                <li ng-repeat="x in dogs | filter:name | orderBy:'age'">{{(x.name | uppercase) + ", " + (x.age + " years old." | lowercase)}}</li>
            </ul>
        </div>
        <script src="modules/filtersAppModule.js"></script>
        <script src="controllers/personController.js"></script>
        <script src="controllers/dogController.js"></script>
    </body>
</html>
