<x-layout.plantilla title="Editar Categoría">
    <br />
    <div class="card">
        <div class="card-header">
            Editar Categoría
        </div>
        <div class="card-body">
            <form action="{{ route('categorias.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $data['descripcion'] }}" />

                <br />
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-warning">Editar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>