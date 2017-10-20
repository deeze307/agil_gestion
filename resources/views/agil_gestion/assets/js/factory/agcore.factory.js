app.factory('AgCore',[
    "$http","$rootScope","$q","cfpLoadingBar", "Modal","$log",
    function($http,$rootScope,$q,cfpLoadingBar, Modal, $log) {
        var interfaz = {};

        interfaz.http = function (options) {
            var isTimeout = false,
                httpRequest,
                httpRequestOptions;

            var rt = {};
            rt.canceled = false;
            rt.result = $q.defer();
            rt.timeout = $q.defer();
            rt.promise = null;

            rt.cancel = function () {
                isTimeout = true;
                rt.timeout.resolve();
                rt.result.reject();
                rt.canceled = true;
                cfpLoadingBar.complete();
            };

            if (!options.timeout) {
                options.timeout = 30;
            }
            ;

            setTimeout(function () {
                isTimeout = true;
                rt.timeout.resolve();
            }, (1000 * options.timeout));

            httpRequestOptions = {
//            headers:  { 'X-Requested-With': 'XMLHttpRequest' },
                method: options.method,
                url: options.url,
                cache: false,
                timeout: rt.timeout.promise,
            };

            if (options.data) {
                httpRequestOptions.data = options.data
            }
            ;

            httpRequest = $http(httpRequestOptions);

            httpRequest.success(function (data, status, headers, config) {
                rt.result.resolve(data);
            });

            httpRequest.error(function (data, status, headers, config) {
                if (isTimeout) {
                    if (rt.canceled) {
                        /*                        rt.result.reject({
                         message: 'Canceled: ' + options.url
                         });*/
                    } else {
                        rt.result.reject({
                            error: 'HTTP Timeout (' + options.timeout + ' seg)'
                        });
                    }
                } else {
                    if (status === 0) {
                        rt.result.reject({
                            error: "No se detecto conexion de red"
                        });
                    } else {
                        rt.result.reject({
                            error: "ERROR: " + status
                        });
                    }
                }
            });

            return rt;
        };

        interfaz.modal = function (options) {
            var btype = BootstrapDialog.TYPE_PRIMARY;
            switch (options.type) {
                case 'danger':
                    btype = BootstrapDialog.TYPE_DANGER;
                    break;
                case 'default':
                    btype = BootstrapDialog.TYPE_DEFAULT;
                    break;
                case 'success':
                    btype = BootstrapDialog.TYPE_SUCCESS;
                    break;
                case 'warning':
                    btype = BootstrapDialog.TYPE_WARNING;
                    break;
                case 'info':
                    btype = BootstrapDialog.TYPE_INFO;
                    break;
                case 'primary':
                    btype = BootstrapDialog.TYPE_PRIMARY;
                    break;
            }

            if (!$rootScope.modalOpened) {
                Modal.create(options.scope, options.title, options.route, btype, options.controller, options.ignoreloadingbar);
            }
        };

        interfaz.modalError = function (scope, err_msg) {
            if (!$rootScope.modalOpened) {
                Modal.error(scope, err_msg);
            }
            ;
        };

        interfaz.storage = function (options) {
            if (options.value) {
                var save_value = options.value;
                if (options.json) {
                    save_value = JSON.stringify(options.value);
                }
                window.localStorage.setItem(options.name, save_value);
            } else {
                var get_value = window.localStorage.getItem(options.name);
                if (options.json) {
                    return JSON.parse(get_value);
                } else {
                    return get_value;
                }
            }
        };

        interfaz.sweetAlert = function (_options){
            var options = _options.options;
            !function($) {
                "use strict";
                var SweetAlert = function() {};

                SweetAlert.prototype.init = function() {
                    swal({
                        //Opciones de visualización de mensaje
                        title: options.title,
                        text: options.text,
                        type: options.type,
                        showCancelButton: options.showCancelButton,
                        confirmButtonColor: options.confirmButtonColor,
                        confirmButtonText: options.confirmButtonText,
                        cancelButtonText: options.cancelButtonText,
                        closeOnConfirm: options.closeOnConfirm,
                        closeOnCancel: options.closeOnCancel
                    }, function(isConfirm){
                        if (isConfirm) {
                            $http.get(options.actionConfirmRoute).then(function(response){
                               if(response.data == 'ok'){
                                   swal(options.actionConfirmTitle, options.actionConfirmText, options.actionConfirmType);
                                   $rootScope.callBackSweetAlert('ya fueeeeee!!!');
                               }else{
                                   swal('Error','Ocurrió un error al intentar realizar la operaeción.','error');
                                   $rootScope.callBackSweetAlert('apaaaa, no fueeee!!!');
                               }
                            });

                        } else {
                            swal(options.actionCancelTitle, options.actionCancelText, options.actionCancelType);
                            return false;
                        }
                    });
                },
                    //init
                    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
            }(window.jQuery),

                //initializing
                function($) {
                    "use strict";
                    $.SweetAlert.init()
                }(window.jQuery);
        };

        interfaz.successSweetAlert = function(_options) {
            var options = _options.options;
            console.log('cargado...');
            !function($) {
                "use strict";
                var SweetAlert = function() {};

                SweetAlert.prototype.init = function() {
                    swal({
                        //Opciones de visualización de mensaje
                        title: options.title,
                        text: options.text,
                        type: options.type,
                        showCancelButton: false,
                        confirmButtonColor: options.confirmButtonColor,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: true

                    },function(){
                        swal();
                    });
                },
                    //init
                    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
            }(window.jQuery),

                //initializing
                function($) {
                    "use strict";
                    $.SweetAlert.init()
                }(window.jQuery);
        };

        return interfaz;
    }]);