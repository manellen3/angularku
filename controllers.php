<!DOCTYPE html>
<html ng-app="ControllersApp">
    <head>
        <meta charset="UTF-8">
        <script src="lib/angular.min.js"></script>
        <title>Angularku | AngularJS Controllers Samples</title>
    </head>
    <body>
        <h1>AngularJS Controllers Samples - expressions</h1>
        <div ng-controller="PersonController">
            <h3>My bio's</h3>
            <p>Name: {{name}}</p>
            <p>Age: {{age}}</p>
            <p>Sex: {{sex}}</p>
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
        <h1>AngularJS Controllers Samples - ng-repeat directives</h1>
        <div ng-controller="DogController">
            <h3>My dogs</h3>
            <ul>
                <li ng-repeat="x in dogs">{{x.name + ", " + x.age + " years old."}}</li>
            </ul>
        </div>
        <script src="modules/controllersAppModule.js"></script>
        <script src="controllers/personController.js"></script>
        <script src="controllers/dogController.js"></script>
    </body>
</html>
