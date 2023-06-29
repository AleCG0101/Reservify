<x-layout.plantilla title="Inicio">

    <br />
    <div class="card" style="max-width: 100rem;">
        <img src="{{$data['imagen']}}" class="card-img-top" height="400">
        <div class="card-header">
            <br/>
            <h3 class="card-tittle">{{ $data['nombre'] }}</h3> 
        </div>
        <div class="card-body">
            <form>
                @csrf
                <label for="descripcion">Categoria:</label>
                <p class="card-text">{{ $categoria['descripcion'] }}</p>
                <p class="card-text">{{ $data['descripcion'] }}</p>  
                <label>Horario:</label>
                <p class="card-text">Abre: {{$data['horaapertura']}} | Cierra: {{$data['horacierre']}}</p>              
                <label for="direccion">Direccion</label>
                <p class="card-text">{{ $data['direccion'] }}</p>
                <br />
                <a href="{{ route('home.index') }}" class="btn btn-secondary">Regresar</a>
                <a href="{{ route('citas.show', $data['id'])}}" class="btn btn-info">Agendar Cita</a>
            </form>
        </div>
    </div>
    <p></p>
    <p></p>
    <p></p>

</x-layout.plantilla>