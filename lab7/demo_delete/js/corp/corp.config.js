(function() {
    'use strict';

    /*
     * This will allow us to have constants that will not change throughout the app.
     * good references for API locations
     */
    angular
        .module('app.corp')
        .constant('REQUEST', {
            'Corp' : '../../lab5/api/v1/corps'
        });
        
})();