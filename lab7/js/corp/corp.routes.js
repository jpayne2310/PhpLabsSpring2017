(function () {
    'use strict';
    angular
            .module('app.corp')
            .config(config);
    
    config.$inject = ['$routeProvider'];
    
    //setup for starting routes
    
    function config($routeProvider) {
        $routeProvider.
                when('/corp', {
                    templateUrl: 'js/corp/corps.template.html',
                    controller: 'CorpController',
                    controllerAs: 'vm'
        }).
                when('corp/:corpId', {
                    templateUrl: 'js/corp/corp-detail.template.html',
                    controller: 'CorpDetailController',
                    controllerAs: 'vm'
        });
    }
})();