@extends('adminlte/theme')
@section('mini',true)
@section('title','TeU - Administracion')
@section('body')
    <div class="container">
            <div class="box box-warning col-lg-2">
                <div class="box-header with-border">
                    <h3 class="box-title">Agregar Ofertas Laborales</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group has-warning">
                            <label>Titulo</label>
                            <input type="text" class="form-control" placeholder="Titulo de Oferta Laboral">
                        </div>

                        <!-- textarea -->
                        <div class="form-group has-warning">
                            <label>Descripción</label>
                            <textarea class="form-control" rows="3" placeholder="Descripción de la Oferta Laboral..."></textarea>
                        </div>
                        <div class="form-group has-warning">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <div class="input-group has-warning">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" placeholder="Teléfono">
                            </div>
                        </div>

                    </form>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked>
                                Visible Web
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked>
                                Visible App
                            </label>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <select id="selEmpleoCategorias" class="form-control select2 has-warning">

                        </select>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                    <button type="submit" name="add" id="add-btn" class="btn btn-flat btn-success">Agregar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
