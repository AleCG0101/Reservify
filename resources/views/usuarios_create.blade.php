<x-layout.plantilla title="Crear Usuario">
    <br />
    <div class="card">
        <div class="card-header">
            Crear Usuario
        </div>
        <div class="card-body">
            <form action="{{ route('usuarios.store') }}" method="post">
                @csrf
                <label for="es_propietario">es_propietario</label>
                <input type="text" name="es_propietario" class="form-control" required />
                <label for="id_negocio">id_negocio</label>
                <input type="number" name="id_negocio" class="form-control" />
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required />
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" required />
                <label for="correo">Correo</label>
                <input type="email" name="correo" class="form-control" required />
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" required />
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" class="form-control" required />
                <label for="fechanacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechanacimiento" class="form-control" required />
                <br />
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success">Agregar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>