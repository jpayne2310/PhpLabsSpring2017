(function() {
    
    'use strict';
    angular
            .module('app')
            .controller('PhoneDetailController', PhoneDetailController);
    //'Phones Service referenced for find phone function
    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];
    
    function PhoneDetailController($routeParams, PhonesService) {
        var vm = this;
        
        vm.phone = {};
        var id = $routeParams.phoneId;
        
        activate();
        
        ////////////
        
        function activate() {
            PhonesService.findPhone(id).then(function(response) {
                vm.phone = response;
            });
        }
        
    }
    
})();


