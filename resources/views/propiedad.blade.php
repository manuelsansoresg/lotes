 @extends('layouts.master')

 @section('add_css')
     <style>
        /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */
        #map {
            height: 400px;
        }
    
        /* Optional: Makes the sample page fill the window. */
       
    </style>
 @endsection

@section('content')
{{-- slider --}}
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-8">
            <p class="h3">Desarrolo western - 0033949</p>
            <p> CALLE 32 #261 X 57 Y 59 COL. SAN RAMÓN.  </p>
        </div>
        <div class="col-12 col-md-4 text-center">
            
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-md-8">
            {{-- slider --}}
            <div id="carouselExampleControls" class="carousel slide carousel-property" data-ride="carousel">
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
                        {{-- <img src="{{ asset('images/home/condominium-690086_1280.jpg') }}" class="d-block w-100" alt="..."> --}}
                       
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
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body text-center"> 
                    <p class="h3 mt-2">CONTACTO</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary"> Enviar mensaje </button>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body text-center">
                   <div class="row">
                       <div class="col-12 col-md-3">
                           <p>Precio $4000000</p>
                       </div>
                       <div class="col-12 col-md-9">
                           Calle 32 #261 X 57 Y 59 col. san ramón. &nbsp; <span class="badge badge-success py-1 px-1">Disponible</span>
                       </div>
                       
                       <div class="col-12">
                           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat tempore cupiditate aperiam excepturi sint, suscipit quidem. Voluptates soluta blanditiis aliquam ipsam quisquam doloribus! Repellendus quod, dolore vitae voluptate ducimus odio aut ipsa enim quibusdam, et mollitia officia inventore, obcaecati incidunt?
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
           <div class="card">
               <div class="card-body">
                   <p class="h3"> Ubicación </p>
                   <div id="map"></div>
               </div>
           </div>
        </div>
    </div>
</div>
{{-- slider --}}

@endsection

@section('add_js')

<script>
    var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDlylj__RPpPcJiCGOBXb93hsXamtEWVk&callback=initMap" async defer></script>
    
@endsection
