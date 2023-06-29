<x-layout.plantilla title="Inicio">
    <br />
    <img src="Reservify.png" alt="Reservify Logo" class="rounded mx-auto d-block" style="height: 300px; width: 300px;">
    <h1>Reservify</h1>
    <h3>Encuentra negocios fácil y rápido</h3>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($data as $dato)
            <div class="col">
                <div class="card h-100">
                    <img width="100%" height="225" src="{{$dato['imagen']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dato['nombre'] }}</h5>
                        <p class="card-text">Categoria: {{$dato['id_categoria']}}</p>
                        <p class="card-text">{{ $dato['descripcion'] }}</p>                
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('citas.show', $dato['id']) }}" class="btn btn-outline-primary">Agendar cita</a>
                        <a href="{{ route('negocios.show', $dato['id']) }}" class="btn btn-outline-info">Ver Negocio</a>
                    </div>
                </div>
         </div>
         @endforeach
    </div>
</x-layout.plantilla>