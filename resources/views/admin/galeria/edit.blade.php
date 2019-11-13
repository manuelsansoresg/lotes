@extends('adminlte::page')

@section('title', 'Galería')

@section('content_header')

<link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">

<section class="content-header">
    <h1>
        Galería
        <small>Nuevo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/desarrollo"><i class="fa fa-dashboard"></i> Desarrollo</a></li>
        <li><a href="/admin/galeria_propiedad/{{ $develop_id }}"><i class="fa fa-dashboard"></i> Galería</a></li>
        <li class="active">Nuevo</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Nueva Galería</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ Form::open(['route' => ['galeria_propiedad.update', $property_develop->id], 'method' => 'PUT', 'files' => true]) }}
                <input type="hidden" name="develop_id" value="{{ $develop_id }}">
                <div id="gallery"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Tipo de archivo </label>
                                <select name="type" id="type" onchange="typeGallery()" class="form-control">
                                    <option value="1" {{ ($property_develop->type == 1)? 'selected' : '' }}>Imagen</option>
                                    <option value="2" {{ ($property_develop->type == 2)? 'selected' : '' }}>Video</option>

                                </select>


                            </div>
                        </div>


                    </div>
                    <?php

                    $d_image = ($property_develop->type == 1) ? '' : 'display:none';
                    $d_video = ($property_develop->type == 2) ? '' : 'display:none';

                    ?>
                    <div class="row" id="div-imagen" style="{{ $d_image }}">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Imagen </label>
                                @if ($property_develop->name == '')
                                    <input type="file" name="gallery" class="form-control">    
                                @else
                                    <p>
                                        <img src="{{ asset('desarrollo_imagenes/thumb_'.$property_develop->name) }}" alt="">
                                    </p>
                                    <p class="pull-right"><a href="/admin/galeria_propiedad/image/delete/{{ $property_develop->id }}" class="btn btn-danger btn-sm">Borrar</a></p>
                                @endif
                                

                                @if($errors)
                                <span class="text-danger"> {{$errors->first('gallery')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row" id="div-video" style="{{ $d_video }}">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Código video </label>
                                <textarea class="form-control" name="code" cols="30" rows="10">{{ $property_develop->code }}</textarea>

                                @if($errors)
                                <span class="text-danger"> {{$errors->first('code')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group  pull-right">
                                <button class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="{{asset('vendor_assets/summernote/summernote.js')}}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#description').summernote({
            height: 200,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'ObjectSans-Regular', 'ObjectSans-Bold'],
            fontNamesIgnoreCheck: ["ObjectSans-Regular", "ObjectSans-Bold"],
            colors: [
                ['#1b365d', '#57728b', 'black', 'white']
            ]
        });
    });
</script>
@stop