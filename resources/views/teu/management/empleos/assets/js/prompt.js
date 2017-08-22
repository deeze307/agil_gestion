app.controller("promptController",["$scope","$rootScope","$http","FactoryEmpleos","toasty","IaCore",function($scope,$rootScope,$http,FactoryEmpleos,toasty,IaCore){


    $scope.updateCategory = function(newName){
        updateCategory(newName);
    };
    $scope.promptEnter = function(newName){
        updateCategory(newName);
    };

    function updateCategory(newName){
        console.log(newName);
        //if(newName.length() > 5){
        //    console.log(id,' ',newName);
        //    FactoryEmpleos.updateCategory(id,newName).then(function(response){
        //        if(response.data == "ok"){
        //            $scope.closeModal();
        //        }
        //    });
        //}
    }

    function getCategories(){
        FactoryEmpleos.getCategories().then(function(response){
            $scope.categories = response.data;
        });
    }
    var elmodal;

    var onShow = $rootScope.$on("modal:show",function(event,modal)
    {
        console.log("modal cargado");
        elmodal = modal;
        console.log('Show Modal',modal);
        onShow(); // Es necesario volver a llamar el metodo, para destruirlo
    });

    $scope.closeModal = function(){
        getCategories();
        elmodal.dialog.close();
    };
}]);
