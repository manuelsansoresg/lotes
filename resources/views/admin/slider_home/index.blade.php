@extends('adminlte::page')

@section('title', 'Slider')

@section('content_header')
<section class="content-header">
    <h1>
        Slider
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Slider</li>
    </ol>
</section>
@stop

@section('content')
<div class="content">
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                    <a href="/admin/slider/create" class="btn btn-success pull-right">
                        <i class="fas fa-plus-circle"></i> &nbsp; Subir imagenes
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
                            <th>Imagen</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($home_sliders as $home_slider)
                    <tbody>
                        <tr>
                            <td> 
                                 
                                <img src="{{ asset('sliders/'.$home_slider->thumb) }}" alt="">
                            </td>
                            <td>
                                {{ Form::open(['route' => ['slider.destroy', $home_slider->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                <a href="/sliders/{{ $home_slider->photo }}" target="_blank" class="btn btn-success"><i
                                        class="fas fa-search-plus"></i></a>
                                <a href="{{route('slider.edit', $home_slider->id)}}" class="btn btn-primary">
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