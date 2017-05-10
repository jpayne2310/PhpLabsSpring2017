(function () {
    
    'use strict';
    angular
        .module('app.corp')
        .controller('CorpDetailController', CorpDetailController);

    CorpDetailController.$inject = ['$routeParams','CorpService'];

    /*
     * This controller will find the details of an address from the address service.
     */
    function CorpDetailController($routeParams, CorpService) {
        var vm = this;

        vm.corps = {};
        var corpID = $routeParams.id;

        activate();

        ////////////

        function activate() {
            CorpService.getCorp(corpID).then(function (response) {
                vm.corps = response;
                
                console.log(vm.corps);                
                loadMap('41.8239890,-71.4128340');
            });
        }
               
        function loadMap(location) {

            var lat = location.split(',')[0];
            var long = location.split(',')[1];

            var myCenter = new google.maps.LatLng(lat, long);

            var mapProp = {
                center: myCenter,
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.querySelector('.googleMap'), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            marker.setMap(map);

        }

    }
    
})();