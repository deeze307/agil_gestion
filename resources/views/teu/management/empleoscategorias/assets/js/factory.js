app.factory("FactoryEmpleosCategorias",["$http",
    function($http){
        return{
            createCategory:function(category){
                return $http.get('categories/create/'+category);
            },
            getCategories:function(){
                return $http.get('categories/all');
            },
            updateCategory:function(id,newName){
                return $http.get('categories/update/'+id+'/'+newName);
            },
            deleteCategory:function(id){
                return $http.get('categories/delete/'+id);
            }
        }
    }
]);
