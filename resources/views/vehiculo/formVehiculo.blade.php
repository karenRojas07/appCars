<label for="marca">marca</label>
<input type="text" name="marca" value="{{ $vehiculo->marca }}" id="marca">
<br>

<label for="modelo">Modelo</label>
<input type="number" name="modelo" value="{{ $vehiculo->modelo }}" id="modelo">
<br>

<label for="precio">Precio</label>
<input type="number" name="precio" value="{{ $vehiculo->precio}}" id="precio">
<br>

<label for="kilometraje">kilometraje</label>
<input type="number" name="kilometraje" value="{{ $vehiculo->kilometraje }}" id="kilometraje">
<br>

<label for="color">color</label>
<input type="text" name="color" value="{{ $vehiculo->color }}" id="color">
<br>

<label for="numeroPuertas">Numero de puertas</label>
<input type="number"name="numero de puertas" value="{{ $vehiculo->numero_de_puertas }}" id="numeroPuertas">
<br>

<label for="foto">Foto del vehiculo</label>
{{ $vehiculo->foto }}
<img src="{{ asset('storage').'/'.$vehiculo->foto }}" alt="Foto de {{ $vehiculo->foto }}" width="100">
<input type="file" name="Foto" value="" id="foto">
<br>

<input type="submit" value="Guardar datos">
