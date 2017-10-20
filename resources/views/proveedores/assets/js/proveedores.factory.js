app.factory("Factory",["$http",
    function($http){
        return{
            //CRUD
            create:function(op,semi){
                return $http.get('proveedores/create/'+op+'/'+semi);
            },
            requestAll:function(){
                return $http.get('proveedores/index');
            },
            update:function(id){
                return $http.get('proveedores/update/'+id);
            },
            delete:function(id){
                return $http.get('proveedores/delete/'+id);
            }
        }
    }
]);