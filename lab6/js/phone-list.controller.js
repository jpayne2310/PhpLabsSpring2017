(function() {
    
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);
    //call and get data for the view page
    PhoneListController.$inject = ['PhonesService'];
    
    function PhoneListController(PhonesService) {
        var vm = this;
        
        vm.phones = [];
        
        activate();
        
        ////////////
        //update view when the values have been updated
        function activate() {
            PhonesService.getPhones().then(function(response) {
                vm.phones = response;
            });
        }
        
    }
    
})();