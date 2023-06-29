<x-layout.plantilla title="Crear Categoría">
    <br />
    <div class="card">
        <div class="card-header">
            Crear Categoría
        </div>
        <div class="card-body">
            <form action="{{ route('categorias.store') }}" method="post">
                @csrf
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" required />
                <br />
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success">Agregar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>