<x-layout.plantilla title="Editar Negocio">
    <br />
    <div class="card">
        <div class="card-header">
            Editar Negocio
        </div>
        <div class="card-body">
            <form action="{{ route('negocios.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <label for="id_categoria">id_categoria</label>
                <input type="number" name="id_categoria" class="form-control" value="{{ $data['id_categoria'] }}" required />
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $data['nombre'] }}" />
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{ $data['direccion'] }}" />
                <label for="horaapertura">Hora de apertura</label>
                <input type="time" name="horaapertura" class="form-control" value="{{ $data['horaapertura'] }}" />
                <label for="horacierre">Hora de cierre</label>
                <input type="time" name="horacierre" class="form-control" value="{{ $data['horacierre'] }}" />
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $data['descripcion'] }}" />

                <br />
                <a href="{{ route('negocios.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-warning">Editar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>