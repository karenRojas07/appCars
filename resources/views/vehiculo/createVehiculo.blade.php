Formulario de creacion de vehiculos

<form action="{{ url('/vehiculo')}}" method="post" enctype='multipart/form-data'>
@csrf

@include('vehiculo.formVehiculo')

</form>
