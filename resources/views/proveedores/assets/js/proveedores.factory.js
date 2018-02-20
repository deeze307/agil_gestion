app.factory("ProviderFactory",["$http","Crud",
    function($http,Crud){
        return{
            //CRUD

            requestAll:function(){
                return Crud.Request('proveedores/index');
            },
            update:function(proveedor){
                return Crud.Update(proveedor,'proveedores/update');
            },
            delete:function(id){
                return Crud.Delete(id,'proveedores/delete/');
            },

            // ** Categorias Proveedores **
            requestCategories:function(){
                return Crud.Request('proveedores/categories/get');
            },
            updateCategories:function(proveedor){
                return Crud.Update(proveedor,'proveedores/update');
            },
            deleteCategories:function(id){
                return Crud.Delete(id,'proveedores/categorias/delete/');
            }
            // ** End Categorias Proveedores **


        }
    }
]);