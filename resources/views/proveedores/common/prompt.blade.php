    <div class="modal-body">
        <form name="frmRequest" method="post" action="{{url('proveedores/create')}}" class="form-horizontal" novalidate="">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="recipient-name" class="control-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" ng-model="proveedor.nombre" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.nombre.$invalid && frmRequest.nombre.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido" ng-model="proveedor.apellido" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.apellido.$invalid && frmRequest.apellido.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Nombre de Fantasía:</label>
                <input type="text" class="form-control" name="nombre_fantasia" ng-model="proveedor.nombre_fantasia" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.nombre_fantasia.$invalid && frmRequest.nombre_fantasia.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" ng-model="proveedor.direccion" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.direccion.$invalid && frmRequest.direccion.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Localidad:</label>
                <input type="text" class="form-control" name="localidad" ng-model="proveedor.localidad" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.localidad.$invalid && frmRequest.localidad.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" ng-model="proveedor.telefono" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.telefono.$invalid && frmRequest.telefono.$touched">campo obligatorio</span>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Categoría:</label>
                <input type="text" class="form-control" name="id_categoria" ng-model="proveedor.id_categoria" ng-required="true">
                <span class="help-inline" ng-show="frmRequest.categoria.$invalid && frmRequest.categoria.$touched">campo obligatorio</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" ng-show="_addProvider" class="btn btn-primary" ng-disabled="frmRequest.$invalid">
                    <span>Crear Proveedor</span>
                </button>
                <button type="button" ng-click="" ng-hide="_addProvider" class="btn btn-primary" ng-disabled="frmRequest.$invalid">
                    <span>Guardar Cambios</span>
                </button>
            </div>
        </form>
    </div>

