<x-layout.plantilla title="Categorías">
    <br />
    <div class="card">
        <div class="card-header">
            Categorías de la base de datos
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
            <h5 class="card-title">Lista de Categorías</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">descripcion</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['descripcion'] }}</td>
                            <td style="text-align: center;"><a href="{{ route('categorias.show', $item['id']) }}"><i class="bi bi-pencil-square link-warning"></i></a></td>
                            <td style="text-align: center;"><a href="{{ route('categorias.destroy', $item['id']) }}"><i class="bi bi-trash3-fill link-danger"></i></a></td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('categorias.create') }}" class="btn btn-success">Agregar Categoría</a>
        </div>
    </div>
</x-layout.plantilla>