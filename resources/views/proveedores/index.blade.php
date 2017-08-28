@extends('ampleadmin/theme')
@section('title','Proveeodres')
@section('head')
@endsection
@section('body')
    <div id="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <h2 class="box-title">Proveedores</h2>
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
                                                        <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                                        <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
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
    </div>
@endsection
