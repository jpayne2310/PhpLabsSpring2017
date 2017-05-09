(function() {
    'use strict';
    
    //create a new module and adds it to the new module
    
    angular.module('app.corp', []);
    
    angular.module('app').requires.push('app.corp');
    
})();