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
                <p class="h2"> DESARROLLOS </p>
            </div>
            <div class="col-12 d-md-flex flex-wrap home__list mt-5">

                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/home/desarrollos/tree-1035173_640.jpg') }}" class="card-img-top" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem, ipsum.</h5>
                            <a href="/desarrollo" class="btn btn-info text-white">Ver lotes</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/home/desarrollos/icon-2534951_640.png') }}" class="card-img-top" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem, ipsum.</h5>
                            <a href="/desarrollo" class="btn btn-info text-white">Ver lotes</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/home/desarrollos/lotus-flower-1805784_640.png') }}" class="card-img-top" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Lorem, ipsum.</h5>
                            <a href="/desarrollo" class="btn btn-info text-white">Ver lotes</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- list properties --}}

 @endsection