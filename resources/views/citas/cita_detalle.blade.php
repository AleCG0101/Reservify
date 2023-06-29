<x-layout.plantilla title="Inicio">

    <br />
    <div class="card">
        <div class="card-header">
            Citas del Usuario
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
            <h5 class="card-title">Citas próximas</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Negocio</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>                        
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<count($data);$i++)
                        <tr>
                            <td>{{ $data[$i]['id_negocio'] }}</td>
                            <td>{{ $direcciones[$i]['direccion']}}</td>
                            <td>{{ $data[$i]['fecha'] }}</td>
                            <td>{{ $data[$i]['hora'] }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('home.index') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
    <p></p>
    <p></p>


</x-layout.plantilla>