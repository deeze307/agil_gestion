app.factory("Factory",["$http",
    function($http){
        return{
            create:function(op,semi){
                return $http.get('lanzamientos/create/'+op+'/'+semi);
            },
            getHistory:function(){
                return $http.get('lanzamientos/gethistory/1');
            },
            getActivesOp:function(){
                return $http.get('lanzamientos/gethistory/0');
            },
            updateActive:function(id){
                return $http.get('lanzamientos/updateactive/'+id);
            },
            existOnWip:function(op){
                return $http.get('lanzamientos/existonwip/'+op);
            },
            getOPData:function(op){
                return $http.get('lanzamientos/getopdata/'+op);
            },
            // **** Destinatarios **** //
            getDestinatarios:function(){
                return $http.get('lanzamientos/getdestinatarios');
            },
            createDestinatario:function(datos){
                return $http.get('lanzamientos/createdestinatario/'+datos.nombre+'/'+datos.apellido+'/'+datos.correo);
            },
            deleteDestinatario:function(id){
                return $http.get('lanzamientos/delete/'+id);
            },
            updateDestinatario:function(destinatario){
                return $http.get('lanzamientos/updatedestinatario/'+destinatario.id+'/'+destinatario.nombre+'/'+destinatario.apellido+'/'+destinatario.correo);
            }
        }
    }
]);