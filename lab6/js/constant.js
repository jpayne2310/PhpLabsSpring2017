//values set for reusability 
(function() {
    'use strict';
    
    angular
            .module('app')
            .constant('REQUEST', {
                //URL reference for where the data will be read from
                'Phones' : './data/phones.json'
    });
})();