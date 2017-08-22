@extends('adminlte/theme')
@section('ng','app')
@section('mini',true)
@section('title','TeU - Administracion')
@section('head')
    {!! IAScript('adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! IAScript('adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}
    {!! IAStyle('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! IAStyle('adminlte/plugins/iCheck/minimal/yellow.css') !!}
    {!! IAScript('assets/moment.min.js') !!}
    {!! IAScript('assets/moment.locale.es.js') !!}
    {{--Angular DataTables--}}
    {!! IAScript('assets/angular-datatables/angular-datatables.min.js') !!}
@endsection
@section('body')
    <div ng-controller="empleosController">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if (Session::has('errors'))
            <div class="alert alert-danger" role="alert">
                <ul>
                    <strong>Error!  </strong>
                    {{ Session::get('errors') }}
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="box box-primary col-lg-6 col-md-6 col-xs-12">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Ofertas Disponibles</h3>
                </div>
                <div class="box-body">
                    <table datatable="ng" dt-options="dtOptions" id="tabla1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">Título</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Movil</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Visible Web</th>
                            <th class="text-center">Visible Movil</th>
                            <th class="text-center">Categoría</th>
                            <th class="text-center">Fecha de Creación</th>
                            <th class="text-center">Puesto Cubierto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="j in jobs">
                            <td class="text-center">@{{j.titulo}}</td>
                            <td class="text-center ">@{{j.descripcion}}</td>
                            <td class="text-center">@{{j.movil}}</td>
                            <td class="text-center">@{{j.email}}</td>
                            <td class="text-center">@{{j.visible_web}}</td>
                            <td class="text-center">@{{j.visible_movil}}</td>
                            <td class="text-center">@{{j.categoria}}</td>
                            <td class="text-center">@{{j.categoria}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @include('iaserver.common.footer')
    {!! IAScript('vendor/teu/management/empleos.js') !!}

@endsection
