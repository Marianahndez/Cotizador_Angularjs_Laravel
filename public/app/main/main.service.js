(function() {
'use strict';

  angular
    .module('prueba')
    .service('mainService', mainService);

  mainService.inject = ['$resource'];
  function mainService($resource) {
  var vm = this;
  var CFG = {get: { method: 'GET'  }  };

  vm.getDB = getDB;

  function getDB() {
    var URL = "/costos/:rangos/:porcentaje";
    return $resource(URL, {rangos: '@rangos', porcentaje: '@porcentaje'}, CFG);
  }
    
  }
})();