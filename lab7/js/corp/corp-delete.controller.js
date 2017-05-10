(function () {
    
    'use strict';
    angular
        .module('app.corp')
        .controller('CorpDeleteController', CorpDeleteController);

    CorpDeleteController.$inject = ['CorpService', '$routeParams'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpDeleteController(CorpService, $routeParams) {
        var vm = this;

        vm.message = '';
        
        var corpId = $routeParams.id;

        activate();

        ////////////

        function activate() {
            CorpService.deleteCorp(id).then(function (response) {
                vm.message = 'Corporation Deleted';
            }, function(error) {
                vm.message = 'Corporation was NOT Deleted';
            });
        }

    }
    
})();