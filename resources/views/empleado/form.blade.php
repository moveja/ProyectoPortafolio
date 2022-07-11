<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
    @foreach( $errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif

<div class="form-group">
<label for="nombre"> Nombre </label>
<input type="text" class="form-control" name="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}" id="nombre">
<br>
</div>

<div class="form-group">
<label for="apellido"> Apellido </label>
<input type="text" class="form-control" name="apellido" value="{{ isset($empleado->apellido)?$empleado->apellido:'' }}" id="apellido">
<br>
</div>

<div class="form-group">
<label for="correo"> Correo </label>
<input type="text" class="form-control" name="correo" value="{{ isset($empleado->correo)?$empleado->correo:'' }}" id="correo">
<br>
</div>

<div class="form-group">
<label for="password"> Password </label>
<input type="text" class="form-control" name="password" value="{{ isset($empleado->password)?$empleado->password:'' }}" id="password">
<br>
</div>

<div class="form-group">
<label for="cel"> Celular </label>
<input type="text" class="form-control" name="cel" value="{{ isset($empleado->cel)?$empleado->cel:'' }}" id="cel">
<br>
</div>

<div class="form-group">
<label for="foto"> </label>
@if(isset($empleado->foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">

@endif

<input type="file" class="form-control" name="foto" value="" id="foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>

<br>