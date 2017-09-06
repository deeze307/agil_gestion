@extends('ampleadmin/theme')
@section('title','Proveedores')
@section('ng','app')
@section('body')
    <div id="page-wrapper">
        <div ng-controller="proveedoresController">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <h2 class="box-title">Proveedores <button type="button" class="btn btn-success btn-outline btn-xs m-r-5" data-toggle="modal" data-target="#exampleModal"><i class="ti-plus"></i></button></h2>
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
                                            <th width="300">MANAGE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datos as $d)
                                            <tr>
                                                <td class="text-center">{{$d->id}}</td>
                                                <td>{{$d->nombre}} {{$d->apellido}}</td>
                                                <td>{{$d->nombre_fantasia}}</td>
                                                <td>{{$d->direccion}}</td>
                                                <td>{{$d->localidad}}</td>
                                                <td>{{$d->telefono}}</td>
                                                <td>{{$d->categoria}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg img-responsive model-img m-r-5" alt="alert" ng-click="eliminarProveedor($event)"><i class="ti-trash"></i></button>
                                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5" data-toggle="modal" data-target="#exampleModal"><i class="ti-pencil-alt"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1">New message</h4> </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name1"> </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message-text1"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
        </div>
    </div>

    <!-- Controlador AngularJS -->
    {!! IAScript('vendor/proveedores/proveedores.js') !!}
@endsection
