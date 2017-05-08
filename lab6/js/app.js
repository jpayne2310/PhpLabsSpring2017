//function wrapper use JS angular files instead of global variables
(function() {
    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);
    
    config.$inject = ['$routeProvider'];
    
    function config($routeProvider) {
            $routeProvider.
                //routing added for the home page
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
            }).
                //routing for the detail page phoneId reference included
                when('/phones/:phoneId', {
                    templateUrl: 'js/phone-detail.template.html',
                    controller: 'PhoneDetailController',
                    controllerAs: 'vm'
            }).
                otherwise({
                    redirectTo: '/'
            });
        }
        
})();