(function() {
    
    'use strict';
    angular
            .module('app')
            .factory('PhonesService', PhonesService);
    
    PhonesService.$inject = ['$http', 'REQUEST'];
    //attemped AJEX call
    function PhonesService($http, REQUEST) {
        
        var url = REQUEST.Phones;
        var service = {
            'getPhones': getPhones,
            //find selected phone
            'findPhone': findPhone
        };
        return service;
        
        ////////////
        
        function getPhones() {
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);
            //successful call
            function getPhonesComplete(response) {
                return response.data;
            }
            
            //call failed
            function getPhonesFailed(error) {
                return [];
            }
        }
        //phone search
        function findPhone(id) {
            
            return getPhones()
                    .then(function(data) {
                        return findPhonesComplete(data);;
            });
            
        function findPhonesComplete(data) {
            var results = {};
            
            angular.forEach(data, function (value, key) {
                if ( !results.length ) {
                    if ( value.hasOwnProperty('id') && value.id === id ) {
                        results = angular.copy(value);
                    }
                }
            }, results);
            
            return results;
            
        }
    }
        
    }
    
})();