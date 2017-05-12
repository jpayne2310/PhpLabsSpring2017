(function () {
    
    'use strict';
    angular
        .module('app.corp')
        .controller('CorpController', CorpController);

    CorpController.$inject = ['CorpService'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpController(CorpService) {
        var vm = this;

        vm.corps = [];
        vm.deleteCorp = deleteCorp;
        vm.message = '';

        activate();

        ////////////

        function activate() {
            CorpService.getAllCorps().then(function (response) {
                vm.corps = response;
            });
        }
        
        function deleteCorp(corpId) {
             CorpService.deleteCorp(corpId).then(function (response) {
                vm.message = 'Corporation Deleted';
                activate();
            }, function(error) {
                vm.message = 'Corporation was NOT Deleted';
            });
        }

    }
    
})();