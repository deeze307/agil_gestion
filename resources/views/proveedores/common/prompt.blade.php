    <div class="modal-body">
        <form name="frmRequest" method="post" action="{{url('proveedores/create')}}" class="form-horizontal" novalidate="">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-body">
                <h3 class="box-title">Información Personal</h3>
                <hr class="m-t-0 m-b-40">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nombre</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nombre" ng-model="proveedor.nombre" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.nombre.$invalid && frmRequest.nombre.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Apellido</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="apellido" ng-model="proveedor.apellido" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.apellido.$invalid && frmRequest.apellido.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nombre de Fantasia</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nombre_fantasia" ng-model="proveedor.nombre_fantasia" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.nombre_fantasia.$invalid && frmRequest.nombre_fantasia.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">CUIT</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="cuit" ng-model="proveedor.cuit" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.cuit.$invalid && frmRequest.cuit.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>

                </div>
                <h3 class="box-title">Información Laboral</h3>
                <hr class="m-t-0 m-b-40">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Dirección</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="direccion" ng-model="proveedor.direccion" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.direccion.$invalid && frmRequest.direccion.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Localidad</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="localidad" ng-model="proveedor.localidad" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.localidad.$invalid && frmRequest.localidad.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Teléfono</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="telefono" ng-model="proveedor.telefono" ng-required="true">
                                <span class="help-inline" ng-show="frmRequest.telefono.$invalid && frmRequest.telefono.$touched">campo obligatorio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Categoría</label>
                            <div class="col-md-9">
                                <select class="form-control" ng-model = "proveedor.id_categoria" >
                                    <option value="0">N/A</option>
                                    <option ng-repeat="c in proveedores_categorias" value="c.id">@{{c.nombre}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" ng-show="_addProvider" class="btn btn-primary" ng-disabled="frmRequest.$invalid">
                    <span>Crear Proveedor</span>
                </button>
                <button type="button" ng-click="updateProvider(proveedor)" ng-hide="_addProvider" class="btn btn-primary" ng-disabled="frmRequest.$invalid">
                    <span>Guardar Cambios</span>
                </button>
            </div>
        </form>
    </div>

