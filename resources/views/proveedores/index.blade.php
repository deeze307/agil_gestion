@extends('ampleadmin/theme')
@section('title','Proveedores')
@section('ng','app')
@section('body')
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="page-wrapper">
        <div ng-controller="proveedoresController">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <h2 class="box-title">Proveedores <button type="button" class="btn btn-success btn-outline btn-xs m-r-5" ng-click="btnClick('{{url('/proveedores/prompt')}}','Crear Proveedor','success','',true)"><i class="ti-plus"></i></button></h2>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-hover manage-u-table">
                                        <thead>
                                        <tr>
                                            <th width="70" class="text-center">#</th>
                                            <th>Nombre</th>
                                            <th>Nombre Fantasía</th>
                                            <th>Dirección</th>
                                            <th>Localidad</th>
                                            <th>Teléfono</th>
                                            <th>Categoría</th>
                                            <th width="300">Administrar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="p in proveedores">
                                                <td class="text-center">@{{p.id}}</td>
                                                <td>@{{p.nombre}} @{{p.apellido}}</td>
                                                <td>@{{p.nombre_fantasia}}</td>
                                                <td>@{{p.direccion}}</td>
                                                <td>@{{p.localidad}}</td>
                                                <td>@{{p.telefono}}</td>
                                                <td>@{{p.nombre_categoria}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg img-responsive model-img m-r-5" alt="alert" ng-click="eliminarProveedor(p)"><i class="ti-trash"></i></button>
                                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5" ng-click="btnClick('{{url('/proveedores/prompt')}}','Editar Proveedor','info',p,false)"><i class="ti-pencil-alt"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

    <!-- Controlador AngularJS -->
    {{--{!! IAScript('assets/angular-cookies/angular-cookies.js') !!}--}}
    {!! IAScript('vendor/agil_gestion/proveedores.js') !!}
@endsection
