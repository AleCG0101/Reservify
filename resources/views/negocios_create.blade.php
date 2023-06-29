<x-layout.plantilla title="Crear Negocio">
    <br />
    <div class="card">
        <div class="card-header">
            Crear Negocio
        </div>
        <div class="card-body">
            <form action="{{ route('negocios.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="id_categoria">id_categoria</label>
                <input type="number" name="id_categoria" class="form-control" required />
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required />
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" required />
                <label for="horaapertura">Hora de apertura</label>
                <input type="time" name="horaapertura" class="form-control" required />
                <label for="horacierre">Hora de cierre</label>
                <input type="time" name="horacierre" class="form-control" required />
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" required />
                <label>Foto del negocio:</label>
                <input type="file" name="imagen" accept="image/*"/>
                <br />
                <a href="{{ route('negocios.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success">Agregar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>