<!DOCTYPE html>
<html ng-app="">
    <head>
        <meta charset="UTF-8">
        <title>Angular - Linda.com</title>
        <script src="lib/angular.min.js"></script>
    </head>
    <body>
        <div ng-controller="ControllerFromLinda">
            <p>Namaku: {{penulis.namaku}}</p>
            <p>Umurku: {{penulis.umurku}}</p>
        </div>
        <script>
            function ControllerFromLinda($scope){
                $scope.penulis = {
                    namaku: "Manellen",
                    umurku: 27
                }
            }
        </script>
    </body>
</html>
