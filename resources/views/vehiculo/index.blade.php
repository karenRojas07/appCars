Mostrar la lista de vehiculos

<table class="table-light">
    <thead class="thead-light">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Kilometraje</th>
            <th>Color</th>
            <th># Puertas</th>
            <th>Foto</th>
        </tr>
    </thead>

    <tbody>
        @foreach($vehiculo as $vehiculos)
        <tr>
            <td>{{ $vehiculos->marca }}</td>
            <td>{{ $vehiculos->modelo }}</td>
            <td>{{ $vehiculos->precio }}</td>
            <td>{{ $vehiculos->kilometraje }}</td>
            <td>{{ $vehiculos->color }}</td>
            <td>{{ $vehiculos->numero_de_puertas }}</td>
            <td>
                @if($vehiculos->foto)
                <img src="{{ asset('storage').'/'.$vehiculos->foto }}" alt="Foto de {{ $vehiculos->foto }}" width="100">
                @else
                No disponible
                @endif
            </td>

            <td>
            <a href="{{ url('/vehiculo/'.$vehiculos->id.'/edit') }}">
                    Editar
            </a>
             |
            <form action="{{ url('/vehiculo/'.$vehiculos->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Quieres borrar este vehiculo?')"
            value="Borrar">
            </form>

            </td>
        </tr>
        @endForeach
    </tbody>
</table>
