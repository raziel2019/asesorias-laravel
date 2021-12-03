@extends('layouts.app')

@section('content')

            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div> <!--Buscador-->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Paises</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('paises.create') }}" class="btn btn-sm btn-primary">Agregar paises</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                                        </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de Creación</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">
                                    <p><button onclick="geoFindMe()">Show my location</button></p>
                                    <div id="out"></div>
                                </th>
                            </tr>
                        </thead>
                        @foreach ($paises as $orden=>$pais)
                    <tbody>
                        <tr>
                            <td>{{++$orden}}</td>
                            <td>{{$pais->Descripcion}}</td>
                            <td>{{$pais->created_at}}</td> 
                            <td>           
                                <form action="{{route("paises.destroy", $pais->id)}}" method="POST"> 
                                    @method("DELETE")
                                    @csrf
                                    <a class="btn btn-primary" href="{{ route('paises.edit', $pais->id ) }}">Editar</a>
                                <button class="btn btn-secondary" type="submit">Eliminar</button>
                                </form>
                </td>
                        </tr>
                    </tbody>

                    @endforeach
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $paises->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
            </div>
        </div>
        
    </div>
    
</div>
<script>
function geoFindMe() {
    var output = document.getElementById("out");
  
    if (!navigator.geolocation){
      output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
      return;
    }
  
    function success(position) {
      var latitude  = position.coords.latitude;
      var longitude = position.coords.longitude;
  
      output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
  
      var img = new Image();
      img.src = "http://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";
  
    };
  
    function error() {
      output.innerHTML = "Unable to retrieve your location";
    };
  
    output.innerHTML = "<p>Locating…</p>";
  
    navigator.geolocation.getCurrentPosition(success, error);
  }
</script>
@endsection



