@extends('adminlte.theme')
@section('ng','app')
@section('mini',true)
@section('title','TeU - Empleos Categorias')
@section('head')
    {!! IAScript('adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! IAScript('adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}
    {!! IAStyle('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! IAScript('assets/moment.min.js') !!}
    {!! IAScript('assets/moment.locale.es.js') !!}
    {{--Angular DataTables--}}
    {!! IAScript('assets/angular-datatables/angular-datatables.min.js') !!}
@endsection
@section('body')
    <div ng-controller="empleosCategoriasController">
        <div class="container">
            <div class="col-lg-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Agregar Categoría de Empleos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                            <!-- text input -->
                            <div class="form-group has-warning">
                                <label>Titulo</label>
                                <input type="text" class="form-control" id="titleCategory" ng-model="titleCategory" placeholder="Titulo de la Categoría">
                            </div>
                        </form>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <button type="button" name="add" id="add-btn" ng-click="addCategory()" class="btn btn-flat btn-success">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        {{--Tabla de Categorias de empleos--}}
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Categorias <small>(Corresponden a las categorías de los empleos disponibles)</small> </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div><!-- /.box-tools -->
                </div>
                <div class="box-body">
                    <table class="table table-condensed">
                        <tr>
                            <th>Categoría</th>
                        </tr>
                        <tr ng-repeat="category in categories">
                            <td>@{{ category.categoria_nombre }}</td>
                            <td>
                                <button class="btn btn-xs btn-info" ng-click="btnClick('{{url('jobs/categories/prompt')}}','Editar Categoría','info',category)">Editar</button>
                                <button class="btn btn-xs btn-danger" ng-click="deleteCategory(category)">Eliminar</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer"></div>
            </div>
        </div>
    </div>

    @include('iaserver.common.footer')
    {!! IAScript('vendor/teu/management/empleoscategorias.js') !!}
@endsection
