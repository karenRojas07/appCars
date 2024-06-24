Formulario de edicion de vehiculos
<br>

<form action="{{url('/vehiculo/'.$vehiculo->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('vehiculo.formVehiculo')
</form>
