@extends('adminlte::page')

@section('title', 'Desarrollo')

@section('content_header')
<section class="content-header">
    <h1>
        Desarrollo
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Desarrollo</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Desarrollo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                    <a href="/admin/desarrollo/create" class="btn btn-success pull-right">
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
                            <th>TÍTULO</th>
                            <th>UBICACIÓN</th>
                            <th>DESCRIPCIÓN</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($develops as $develop)
                    <tbody>
                        <tr>
                            <td>{{ $develop->title }}</td>
                            <td>{{ $develop->ubication }}</td>
                            <td> {!! $develop->description !!} </td>
                            <td>
                                {{ Form::open(['route' => ['desarrollo.destroy', $develop->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                <a href="/admin/galeria_propiedad/{{ $develop->id }}" class="btn btn-info "><i class="far fa-images"></i></a>
                                <a href="/admin/propiedad/{{ $develop->id }}" class="btn btn-success"><i class="fas fa-plus-circle"></i></a>
                                <a href="{{route('desarrollo.edit', $develop->id)}}" class="btn btn-primary">
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