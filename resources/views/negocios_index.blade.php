<x-layout.plantilla title="Negocios">
    <br />
    <div class="card">
        <div class="card-header">
            Negocios de la base de datos
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
            <h5 class="card-title">Lista de Negocios</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">foto</th>
                        <th scope="col">id_categoria</th>
                        <th scope="col">nombre</th>
                        <th scope="col">direccion</th>
                        <th scope="col">hora apertura</th>
                        <th scope="col">hora cierre</th>
                        <th scope="col">descripcion</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td><img src="{{$item['imagen']}}" width="60" height="60"></td>
                            <td>{{ $item['id_categoria'] }}</td>
                            <td>{{ $item['nombre'] }}</td>
                            <td>{{ $item['direccion'] }}</td>
                            <td>{{ $item['horaapertura'] }}</td>
                            <td>{{ $item['horacierre'] }}</td>
                            <td>{{ $item['descripcion'] }}</td>
                            <td style="text-align: center;"><a href="{{ route('negocios.show', $item['id']) }}"><i class="bi bi-pencil-square link-warning"></i></a></td>
                            <td style="text-align: center;"><a href="{{ route('negocios.destroy', $item['id']) }}"><i class="bi bi-trash3-fill link-danger"></i></a></td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('negocios.create') }}" class="btn btn-success">Agregar Negocio</a>
        </div>
    </div>
</x-layout.plantilla>
