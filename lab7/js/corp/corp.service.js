(function() {
    'use strict';
    angular
            .module('app.corp')
            .factory('CorpService', CorpService);
    
    CorpService.$inject = ['http', 'REQUEST'];
    
    function CorpService($http, REQUEST) {
        var url = REQUEST.Corp;
        
        var service = {
            'getAllCorps' : getAllCorps,
            'getCorp' : getCorp,
            'postCorp' : postCorp,
            'deleteCorp' : deleteCorp,
            'putCorp' : putCorp
            
        };
        return service;
        
        ////////////
        
        function getAllCorps() {
            return $http.get(url)
                    .then(handleSuccess, handleFailed);
            
            function handleSuccess(response) {
                return responce.data.data;
            }
        
            function handleFailed(error) {
                return [];
            }
    }

        function getCorp(corp_id) {
            var _url = url + '/' + corp_id;
            
            return $http.get(_url)
                    .then(handleSuccess, handleFailed);
            
            function handleSuccess(response) {
                return responce.data.data;
            }
        
            function handleFailed(error) {
                return {};
            }
    }

        function postCorp(corp, incorp_dt, email, owner, phone, location) {
            var model = {};
            model.corp = corp;
            model.incorp_dt = incorp_dt;
            model.email = email;
            model.owner = owner;
            model.phone = phone;
            model.location = location;
            
            return $http.post(url, model);
    }
    
        function deleteCorp(corp_id) {
            var _url = url + '/' + corp_id;
            return $http.delete(_url);
    }

        function putCorp(corp_id, corp, incorp_dt, email, owner, phone, location) {
            var _url = url + '/' + corp_id;
            var model = {};
            model.corp = corp;
            model.incorp_dt = incorp_dt;
            model.email = email;
            model.owner = owner;
            model.phone = phone;
            model.location = location;
            
            return $http.pur(_url, model);
    }

    
    }
})();