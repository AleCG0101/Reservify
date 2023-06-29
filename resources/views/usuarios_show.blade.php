<x-layout.plantilla title="Editar Usuario">
    <br />
    <div class="card">
        <div class="card-header">
            Editar Usuario
        </div>
        <div class="card-body">
            <form action="{{ route('usuarios.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <label for="es_propietario">es_propietario</label>
                <input type="text" name="es_propietario" class="form-control" value="{{ $data['es_propietario'] }}" required />
                <label for="id_negocio">id_negocio</label>
                <input type="number" name="id_negocio" class="form-control" value="{{ $data['id_negocio'] }}" />
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $data['nombre'] }}" />
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" value="{{ $data['apellido'] }}" />
                <label for="correo">Correo</label>
                <input type="email" name="correo" class="form-control" value="{{ $data['correo'] }}" />
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{ $data['direccion'] }}" />
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" class="form-control" value="{{ $data['contrasena'] }}" />
                <label for="fechanacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechanacimiento" class="form-control" value="{{ $data['fechanacimiento'] }}" />

                <br />
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-warning">Editar</button>
            </form>
        </div>
    </div>
</x-layout.plantilla>