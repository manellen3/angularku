//Controller style from AngularJS website
//myApp.controller('MyController1', ['$scope', function($scope) {
//        $scope.name = "Manellen";
//        $scope.age = 27;
//        $scope.sex = "Male";
//    }]);


//Controller style from w3schools.com
app.controller('PersonController', function($scope) {
    //properties
    $scope.name = "Manellen";
    $scope.age = 27;
    $scope.sex = "Male";

    //functions
    $scope.printBio = function() {
        bio = "My name is: " + $scope.name + ", " + $scope.sex + ", " + $scope.age + " years old.";
        return bio;
    }
});
