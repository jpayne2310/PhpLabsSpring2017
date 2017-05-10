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
                when('corp/:id', {
                    templateUrl: 'js/corp/corp-detail.template.html',
                    controller: 'CorpDetailController',
                    controllerAs: 'vm'
        }).
                when('/corp/delete/:id', {
                templateUrl: 'js/corp/corp-delete.template.html',
                controller: 'CorpDeleteController',
                controllerAs: 'vm'
            });
    }
})();