app.controller("proveedoresController",["$scope","$rootScope","$http","Factory","$log","$route","AgCore","$window","$cookies",
    function($scope,$rootScope,$http,Factory,$log,$route,AgCore,$window,$cookies){

        var Cookie = $cookies.proveedorCreado;
        $log.log('estado '+Cookie);
        if(Cookie == 'Exito'){
            var _options = {
                text:'Proveedor Creado Exitosamente!',
                title:'Exito!',
                type:'success',
                confirmButtonColor:'#DD6B55'
            };
            AgCore.successSweetAlert({options:_options});
            $cookies.remove("proveedorCreado");
        }else if(Cookie == 'Error'){
            var _options = {
                text:'Ocurrió un error al intentar crear el Proveedor',
                title:'Error!',
                type:'error',
                confirmButtonColor:'#DD6B55'
            };
            AgCore.successSweetAlert({options:_options});
        }

       requestAllProviders();

        $scope.btnClick = function(route, title, type,proveedor,add){
            if (add == true){
                $scope.proveedor = "";
                //$scope.datos_apellido = "";
                //$scope.datos_correo = "";
                $scope._addProvider = true;
            }else{
                $scope.proveedor = proveedor;
                //$scope.datos_apellido = datos.apellido;
                //$scope.datos_correo = datos.correo;
                $scope._addProvider = false;
            }
            $scope.openModal(route,title,type);
        };



        $scope.openModal = function(route, title, type) {
            AgCore.modal({
                scope: $scope,
                route:route,
                title: title,
                type: type,
                ignoreloadingbar: true
            });
        };
        var elmodal;

        var onShow = $rootScope.$on("modal:show",function(event,modal)
        {
            elmodal = modal;
            console.log('Show Modal',modal);
            onShow(); // Es necesario volver a llamar el metodo, para destruirlo
        });

        $scope.closeModal = function(){
            elmodal.dialog.close();
        };

        $scope.eliminarProveedor = function(proveedor){
            var _options = {
                title : "Esta seguro que deseas eliminar a "+proveedor.nombre_fantasia,
                text : "No podrás recuperar este Proveedor en un futuro",
                type : "warning",
                showCancelButton : true,
                confirmButtonColor : "#DD6B55",
                confirmButtonText : "Si, eliminar!!",
                cancelButtonText : "No, cancelar por favor!",
                closeOnConfirm : false,
                closeOnCancel : false,
                actionConfirmTitle : "Eliminado!",
                actionConfirmText : proveedor.nombre_fantasia+" ha sido eliminado.",
                actionConfirmRoute : "proveedores/destroy/"+proveedor.id,
                actionConfirmType : "success",
                actionCancelTitle : "Cancelado",
                actionCancelText : "Tu Proveedor se salvó",
                actionCancelType : "error"
            };

            AgCore.sweetAlert({options:_options});
        };

        $rootScope.callBackSweetAlert = function(mensaje){
            $log.log(mensaje);
            requestAllProviders();
        };

        function requestAllProviders(){
            Factory.requestAll().then(function(response){
                $scope.proveedores = response.data;
            });
        }

}]);
