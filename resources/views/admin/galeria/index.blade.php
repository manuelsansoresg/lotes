@extends('adminlte::page')

@section('title', 'Galería')

@section('content_header')
<section class="content-header">
    <h1>
        Galería
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/desarrollo"><i class="fa fa-dashboard"></i> Desarrollo </a></li>
        <li class="active">Galería</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Galería</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                    <a href="/admin/galeria_propiedad/create/{{ $develop_id }}" class="btn btn-success pull-right">
                        <i class="fas fa-plus-circle"></i> &nbsp; Nuevo
                    </a>
                </div>
                <br><br>
                <div class="col-md-12">
                    @include('flash::message')
                </div>
                <br><br><br>
                <div class="col-md-12">
                    <table id="mobiliaria" class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>CONTENIDO</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($gallery_develops as $gallery_develop)
                        <tbody>
                            <tr>
                                <td>
                                    @if ($gallery_develop->type == 1)
                                    <img src="{{ asset('desarrollo_imagenes/thumb_'.$gallery_develop->name ) }}" alt="">
                                    @else
                                    {!! $gallery_develop->code !!}
                                    @endif
                                </td>
                                <td>
                                    {{ Form::open(['route' => ['galeria_propiedad.destroy', $gallery_develop->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                    <a href="{{route('galeria_propiedad.edit', $gallery_develop->id)}}" class="btn btn-primary">
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
                </div>
            </div>

        </div>

    </div>
</div>
<style>
    iframe {
        width: 40% !important;
        height: 200px !important;
    }
</style>
@stop