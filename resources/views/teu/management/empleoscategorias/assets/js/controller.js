app.controller("empleosCategoriasController",["$scope","$rootScope","$http","FactoryEmpleosCategorias","toasty","IaCore",function($scope,$rootScope,$http,FactoryEmpleosCategorias,toasty,IaCore){

    getCategories();

    // Para agregar categorias, solo se especifica el nombre de la categoría y valida que tenga
    // más de 5 caracteres
    $scope.addCategory = function(){
        if($scope.titleCategory.length>5){
            FactoryEmpleosCategorias.createCategory($scope.titleCategory).then(function(response){
                if(response.data == "ok"){
                    toasty.success({
                        title:'Creación exitosa!',
                        msg:'Categoría '+$scope.titleCategory+' creada exitosamente'
                    });
                    getCategories();//vuelvo a cargar las categorias
                }else{
                    toasty.error({
                        title:'Error',
                        msg:'Ocurrió un error al intentar agregar la categoría'
                    });
                }
            });

        }else{
            toasty.error({
                title:'Error',
                msg:'El nombre de la Categoría debe tener más de 5 caracteres'
            });
        }
        $scope.titleCategory="";
    };

    $scope.promptEnter = function(category){
        $scope.updateCategory(category);
    };

    $scope.updateCategory = function(category){
        var id = category.id;
        var newName = category.newName;
        if(newName.length > 5){
            FactoryEmpleosCategorias.updateCategory(id,newName).then(function(response){
                if(response.data =="ok"){
                    getCategories();
                    toasty.success({
                        title:'Categoría Actualizada!'
                    });
                    $scope.closeModal();
                }
            });
        }
    };

    $scope.deleteCategory = function(category){
        FactoryEmpleosCategorias.deleteCategory(category.id).then(function(response){
            if(response.data == 'ok'){
                getCategories();
                toasty.success({
                    title:'Categoría Eliminada!'
                });
            }else{
                toasty.error({
                    title:'Error',
                    msg:'Ocurrió un error al eliminar la categoría'
                });
            }
        });
    };

    function getCategories(){
        FactoryEmpleosCategorias.getCategories().then(function(response){
            $scope.categories = response.data;
        });
    }


    // Modal

    $scope.btnClick = function(route, title, type,category){
        $scope.empCat=[];
        $scope.empCat.newName = category.categoria_nombre;
        $scope.empCat.id = category.id;
        $scope.openModal(route,title,type);
    };

    $scope.openModal = function(route, title, type) {
        IaCore.modal({
            scope: $scope,
            route:route,
            title: title,
            type: type,
            ignoreloadingbar: false
        });
    };
    var elmodal;

    var onShow = $rootScope.$on("modal:show",function(event,modal)
    {
        elmodal = modal;
        onShow(); // Es necesario volver a llamar el metodo, para destruirlo
    });

    $scope.closeModal = function(){
        elmodal.dialog.close();
    };
}]);
