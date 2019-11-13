 @extends('layouts.master')

 @section('content')

 {{-- slider --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/home/architecture-1867187_640.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/residence-2219972_1280.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/condominium-690086_1280.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- slider --}}

{{-- list properties --}}
<div class="home container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <p class="h2"> PROPIEDADES </p>
        </div>
        <div class="col-12 d-md-flex flex-wrap home__list mt-3">

            <div class="col-12 col-md-3 mt-3">
                <div class="card">
                    <a href="/propiedad/1">
                        <img src="{{ asset('images/home/desarrollos/1/living-room-2155353_640.jpg') }}" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        <a href="/propiedad/1">
                            <h5 class="text-info font-weight-lighter">Merida , Yuc.</h5>
                        </a>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="text-muted small">$5000000 </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="badge badge-success text-white py-2 px-2 small">Disponible</p>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 mt-3">
                <div class="card">
                    <a href="/propiedad/1">
                        <img src="{{ asset('images/home/desarrollos/1/interior-2400372_640.jpg') }}" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        <a href="/propiedad/1"><h5 class="text-info font-weight-lighter">Merida , Yuc.</h5></a>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="text-muted small">$2000000 </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="badge badge-danger text-white py-2 px-2 small">No disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 mt-3">
                <div class="card">
                    <a href="/propiedad/1">
                        <img src="{{ asset('images/home/desarrollos/1/furniture-3042835_640.jpg') }}" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        <a href="/propiedad/1"><h5 class="text-info font-weight-lighter">Merida , Yuc.</h5></a>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="text-muted small">$2000000 </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="badge badge-success text-white py-2 px-2 small">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-3 mt-3">
                <div class="card">
                    <a href="/propiedad/1">
                        <img src="{{ asset('images/home/desarrollos/1/kitchen-1640439_640.jpg') }}" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        <a href="/propiedad/1"><h5 class="text-info font-weight-lighter">Merida , Yuc.</h5></a>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="text-muted small">$2000000 </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="badge badge-success text-white py-2 px-2 small">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-3">
                <div class="card">
                    <a href="/propiedad/1">
                        <img src="{{ asset('images/home/desarrollos/1/living-room-2155353_640.jpg') }}" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        <a href="/propiedad/1">
                            <h5 class="text-info font-weight-lighter">Merida , Yuc.</h5>
                        </a>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="text-muted small">$5000000 </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="badge badge-success text-white py-2 px-2 small">Disponible</p>
                            </div>
            
                        </div>
            
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
{{-- list properties --}}
     
 @endsection