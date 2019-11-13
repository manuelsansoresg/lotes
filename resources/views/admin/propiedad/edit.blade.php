@extends('adminlte::page')

@section('title', 'Desarrollo')

@section('content_header')

<link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">

<section class="content-header">
    <h1>
        Desarrollo
        <small>Nuevo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/desarrollo"><i class="fa fa-dashboard"></i> Desarrollo</a></li>
        <li><a href="/admin/propiedad/{{ $property_id }}"><i class="fa fa-dashboard"></i> Propiedad</a></li>
        <li class="active">Nuevo</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Nueva Inmobiliaria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ Form::open(['route' => ['propiedad.update', $property_develop->id], 'method' => 'PUT']) }}
                <input type="hidden" name="develop_id" value="{{ $property_id }}">
                <div class="container">
                    <div class="row">

                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción</label>
                                <textarea name="description" id="description" cols="50" rows="10">{!! $property_develop->description !!}</textarea>

                                @if($errors)
                                <span class="text-danger"> {{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-11">
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