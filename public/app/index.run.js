(function() {
  'use strict';

  angular
    .module('prueba')
    .run(runBlock);

  /** @ngInject */
  function runBlock($log) {

    $log.debug('runBlock end');
  }

})();
