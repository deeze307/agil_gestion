app.factory('Crud',[
    "$http",
    function($http) {
        var crud = {};

        crud.Request = function(url){
            return $http.get(url);
        };
        crud.Create = function(data,url){
            return $http({
                method: 'POST',
                data: data,
                url: url
            }).then(function successCallback(response) {
                return response;
            }, function errorCallback(response) {
                return response;
            });
        };
        crud.Update = function(data,url){
            return $http({
                method: 'POST',
                data: data,
                url: url
            }).then(function successCallback(response) {
                return response;
            }, function errorCallback(response) {
                return response;
            });
        };
        crud.Delete = function(id,url){
            return $http.get(url+'/'+id);
        };

        return crud;
    }]);
