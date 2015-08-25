<!DOCTYPE html>
<html ng-app="">
    <head>
        <meta charset="UTF-8">
        <script src="lib/angular.min.js"></script>
        <title>Angularku | AngularJS Directives Samples</title>
    </head>
    <body>
        <h1>AngularJS Directives Samples</h1>
        <?php //initiate default value of variable name and status to application scope. ?>
        <div ng-init="nama='Manellen'; status='Bujang';">
            <?php //display value of variable nama to HTML view that's coming from application scope. ?>
            <h3>My name: <span ng-bind="nama"></span></h3>
            <ul>
                <?php //display value of variable status to HTML view that's coming from application scope. ?>
                <li>Status: {{status}}</li>
            </ul>
            <i>Not satisfied yet?</i>
            <?php //Binds value of HTML input text control to application scope so the controllers, 
            //directives and expressions can access it. In this case the value of variable nama and status
            //will be stored volatilely in application scope ?>
            <p>Name: <input type="text" ng-model="nama" /></p>
            <p>Status: <input type="text" ng-model="status" /></p>
        </div>
        <hr />
        <h1>AngularJS Repeating HTML Elements</h1>
        <div ng-init="dogs=['Pensil','Cing Cing','Pilo','Raja','Jef']">
            My dogs:<br />
            <ul>
                <li ng-repeat="x in dogs">{{x}}</li>
            </ul>
        </div>
        <hr />
        <h1>AngularJS Repeating HTML Elements - </h1>
        <div ng-init="sibling=[
            {name: 'Hendra', age: 32},
            {name: 'Henny', age:29},
            {name: 'Hellen', age: 27}
        ]">
            My sibling<br />
            <ul>
                <li ng-repeat="i in sibling">{{i.name + ', ' + i.age}}</li>
            </ul>
        </div>
        <script>
            
        </script>
    </body>
</html>
