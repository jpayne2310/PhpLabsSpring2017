(function () {
    
    'use strict';
    angular
        .module('app.corp')
        .controller('AddressDeleteController', AddressDeleteController);

    CorpDeleteController.$inject = ['CorpService', '$routeParams'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpDeleteController(CorpService, $routeParams) {
        var vm = this;

        vm.message = '';
        
        var corpId = $routeParams.corpId;

        activate();

        ////////////

        function activate() {
            CorpService.deleteAddress(corpId).then(function (response) {
                vm.message = 'Address Deleted';
            }, function(error) {
                vm.message = 'Address was NOT Deleted';
            });
        }

    }
    
})();