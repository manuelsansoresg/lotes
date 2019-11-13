@extends('adminlte::page')

@section('title', 'Slider')

@section('content_header')

<link rel="stylesheet" href="{{ asset('vendor_assets/summernote/summernote.css') }}">

<section class="content-header">
    <h1>
        Slider
        <small>Nuevo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/admin/slider"><i class="fa fa-dashboard"></i> Slider</a></li>
        <li class="active">Nuevo</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Nuevo slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ Form::open(['route' => ['slider.update', $home_slider->id], 'method' => 'PUT', 'files' => true]) }}
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen</label>
                                @if ($home_slider->photo == '')
                                    <input type="file" name="photo"  class="form-control">
                                @endif

                                @if($errors)
                                <span class="text-danger"> {{$errors->first('photo')}}</span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-2">
                            @if ($home_slider->photo != '')
                                <p><img src="{{ asset('sliders/'.$home_slider->thumb) }}" alt=""></p>
                                <p class="pull-right"><a href="/admin/slider/image/delete/{{ $home_slider->id }}"
                                        class="btn btn-danger btn-sm">Borrar</a></p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
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