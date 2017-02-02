(function() {
  'use strict';

  angular
    .module('prueba')
    .controller('MainController', MainController);

  /** @ngInject */
  function MainController(mainService) {
    var vm = this;
    vm.sendInfo = sendInfo;

    function sendInfo() {
      mainService.getDB().get({porcentaje:vm.rangos, rangos:vm.porcentaje}, function(response){
        console.log(response);
        vm.values = response;
        vm.labels = ["Energía Solar", "Energía CFE"];
        vm.data = [parseInt(vm.porcentaje), 100 - parseInt(vm.porcentaje)];
        vm.diferencia = (100 - parseInt(vm.porcentaje)).toString();
      });

    }

    


  }
})();
