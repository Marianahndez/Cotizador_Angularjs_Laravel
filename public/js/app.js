var app = angular.module('myApp', ['ngresource']);

app.controller('dataInfo', ['cotizador', function(cotizador, $scope){
    var vm = this;
    //vm.sendinfo = sendinfo;
    $scope.sendinfo = sendinfo;

    function sendinfo(){
        console.log('hola');
        cotizador.db(vm.rangos, vm.porcentaje).query();
    }
}]);

app.service('cotizador', ['$resource', function($resource) {
    //conexion hacia bd
    var CFG = {query: {method:'GET'}};
    var service = {};
    return service;

    function db(rangos, porcentaje){
        console.log('db');
        var url = 'http://localhost:8000/costos/' + rangos + '/' + porcentaje;
        return $resource(url, {}, CFG);
    }

}])