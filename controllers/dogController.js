//angular.module('ControllerApp',[]).controller('DogController',['$scope',function($dogs){
//        $dogs.name = ['Pensil','Cing Cing','Pilo','Raja','Jef'];
//}]);

app.controller('DogController', function($scope) {
    $scope.dogs = [
        {name: 'Pensil',age: 9},
        {name: 'Cing Cing',age: 8},
        {name: 'Pilo',age: 8},
        {name: 'Raja',age: 7},
        {name: 'Jef',age: 7},
    ];
});
