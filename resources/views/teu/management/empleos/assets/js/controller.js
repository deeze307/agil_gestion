app.controller("empleosController",["$scope","$rootScope","$http","FactoryEmpleos","toasty","IaCore",function($scope,$rootScope,$http,FactoryEmpleos,toasty,IaCore){
    $scope.categories =[];
    $scope.visibleWeb = true;
    $scope.visibleApp = true;
    getCategories();


    $scope.promptEnter = function(category){
        $scope.updateCategory(category);
    };

    function getCategories(){
        FactoryEmpleos.getCategories().then(function(response){
            $scope.categories = response.data;
        });
    }

    $scope.addJob=function(){
        var job = [];
        job.titulo = $scope.title;
        job.descripcion = $scope.descJob;
        job.email = $scope.email;
        job.phone = $scope.phone;
        job.visible_web = $scope.visibleWeb;
        job.visible_app = $scope.visibleApp;
        job.id_categoria = $scope.selected;
        //FactoryEmpleos.createJob(job).then(function(response){
        //    if(response.data == 'ok'){
        //        toasty.success({
        //            title:'Creación exitosa!',
        //            msg:'Empleo creado exitosamente.'
        //        });
        //        $scope.title="";
        //        $scope.descJob = "";
        //        $scope.email = "";
        //        $scope.phone = "";
        //        $scope.selected = "";
        //    }else{
        //        toasty.error({
        //            title:'Error!',
        //            msg:'Ocurrió un error al crear el empleo.'
        //        });
        //    }
        //});
    };

    $scope.appendEnter = function(){
        $scope.descJob += "<br>";
    };


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

    $(document).ready(function(){
        var self = $(this),
            label = self.next(),
            label_text = label.text();
        label.remove();
        $('#chkWeb').iCheck({
            checkboxClass: 'icheckbox_minimal-yellow',
            radioClass: 'iradio_line',
            insert: '<div class="icheck-line-icon"></div>' + label_text,
            increaseArea:'20%'
        });

        $('#chkWeb').on('ifChanged',function(event){
            if($scope.visibleWeb == true){
                $scope.visibleWeb = false;
            }else{
                $scope.visibleWeb = true;
            }
        });
        $('#chkApp').iCheck({
            checkboxClass: 'icheckbox_minimal-yellow',
            radioClass: 'iradio_line',
            insert: '<div class="icheck-line-icon"></div>' + label_text,
            increaseArea:'20%'
        });

        $('#chkApp').on('ifChanged',function(event){
            if($scope.visibleApp == true){
                $scope.visibleApp= false;
            }else{
                $scope.visibleApp = true;
            }
        });
    });

}]);
