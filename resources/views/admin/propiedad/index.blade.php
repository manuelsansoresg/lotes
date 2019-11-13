@extends('adminlte::page')

@section('title', 'Propiedad')

@section('content_header')
<section class="content-header">
    <h1>
        Propiedad
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/desarrollo"><i class="fa fa-dashboard"></i> Desarrollo</a></li>
        <li class="active">Propiedad</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Propiedad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                    <a href="/admin/propiedad/create/{{ $property_id }}" class="btn btn-success pull-right">
                        <i class="fas fa-plus-circle"></i> &nbsp; Nuevo
                    </a>
                </div>
                <br><br>
                <div class="col-md-12">
                    @include('flash::message')
                </div>
                <br><br><br>

                <table id="mobiliaria" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>DESCRIPCIÓN</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($property_develops as $property_develop)
                    <tbody>
                        <tr>
                            <td> {!! $property_develop->description !!} </td>
                            <td>
                                {{ Form::open(['route' => ['propiedad.destroy', $property_develop->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                <a href="{{route('propiedad.edit', $property_develop->id)}}" class="btn btn-primary">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button onclick="return confirm('¿Deseas eliminar el elemento?')" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                                {{ Form::close() }}
                            </td>
                        </tr>

                    </tbody>
                    @endforeach

                </table>
                <div class="col-md-12 text-center">

                </div>
            </div>

        </div>

    </div>
</div>

@stop