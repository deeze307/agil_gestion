app.factory("FactoryEmpleos",["$http",
    function($http){
        return{

            getCategories:function(){
                return $http.get('categories/all');
            }
            //createJob:function(job){
            //    return $http.get('new/create/'+job);
            //}
        }
    }
]);
