<x-layout.plantilla title="Usuarios">
    <br />
    <div class="card">
        <div class="card-header">
            Usuarios de la base de datos
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                    @if ($mensaje = Session::get('successEdit'))
                        <div class="alert alert-warning" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                    @if ($mensaje = Session::get('successDelete'))
                        <div class="alert alert-danger" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title">Lista de Usuarios</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">es_propietario</th>
                        <th scope="col">id_negocio</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellidos</th>
                        <th scope="col">correo</th>
                        <th scope="col">direccion</th>
                        <th scope="col">contraseña</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['es_propietario'] }}</td>
                            <td>{{ $item['id_negocio'] }}</td>
                            <td>{{ $item['nombre'] }}</td>
                            <td>{{ $item['apellido'] }}</td>
                            <td>{{ $item['correo'] }}</td>
                            <td>{{ $item['direccion'] }}</td>
                            <td>{{ $item['contrasena'] }}</td>
                            <td>{{ $item['fechanacimiento'] }}</td>
                            <td style="text-align: center;"><a href="{{ route('usuarios.show', $item['id']) }}"><i class="bi bi-pencil-square link-warning"></i></a></td>
                            <td style="text-align: center;"><a href="{{ route('usuarios.destroy', $item['id']) }}"><i class="bi bi-trash3-fill link-danger"></i></a></td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('usuarios.create') }}" class="btn btn-success">Agregar Usuario</a>
        </div>
    </div>
</x-layout.plantilla>
