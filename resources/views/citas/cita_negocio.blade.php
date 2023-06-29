<x-layout.plantilla title="Agendar Cita">

    <br />
    <div class="container" style="align-items: center">
      <div class="card" style="width: w-100;">
        <div class="card-header">
            Agenda tu cita en:
            <h3>{{ $data['nombre'] }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('citas.store') }}" method="post">
                @csrf
                <input type="hidden" name="id_negocio" value="{{ $data['id'] }}">
                <input type="hidden" name="id_usuario" value="1"/>
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required />
                <label for="hora">Hora:</label>
                <input type="time" name="hora" class="form-control" required />
                <br/>
                <label>Acude a esta direccion:</label>
                <p>{{$data['direccion']}}</p>
                <br />
                <a href="{{ route('negocios.show', $data['id'])}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success">Agendar</button>
            </form>
        </div>
        <div class="card-footer">
            <label>Recuerda acudir a tiempo a tu cita</label>
        </div>
    </div>

    </div>
    
</x-layout.plantilla>