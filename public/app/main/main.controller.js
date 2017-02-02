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
      });
    }
    


  }
})();
