(function() {
  'use strict';

  angular
    .module('prueba')
    .controller('MainController', MainController);

  /** @ngInject */
  function MainController(mainService) {
    var vm = this;
    vm.sendInfo = sendInfo;
    vm.limit = 5;

    vm.rangos_text = [ "$2,000 - $3,000", 
                       "$4,000 - $5,000", 
                       "$6,000 - $7,000", 
                       "$8,000 - $9,000",
                       "$10,000 - $11,000", 
                       "$12,000 - $13,000"];

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
