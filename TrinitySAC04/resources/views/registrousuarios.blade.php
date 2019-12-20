@extends('layouts.menuItems')

@section('content')

<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Usuarios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registro</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form action="{{ route('registrousuariosaccion') }}" method="post">
  {{ csrf_field() }}
  <h6>Información General</h6><hr>
  <div class="row">
    <div class="col-md-6">

    <div class="row form-group">
    
        <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">ID</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="id_user" name="id_user" placeholder="Ej: 232736676"></div>

    </div>

    <div class="row form-group">
    
    <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">DNI</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="dni" name="dni" placeholder="Ej: 232736676"></div>

</div>

    </div>
    </div>
 
<br>

  <h6>Datos Personales</h6><hr>
  <div class="row">
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">Primer Nombre</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="nombres" name="nombres" placeholder="Ej: Pedro"></div>

</div>

      <div class="row form-group">
    
    <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">Primer Apellido</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="apellidos" name="apellidos" placeholder="Ej: Perez"></div>

</div>
</div>
  
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Segundo Nombre</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="email" name="email" placeholder="Ej: Jose"></div>

</div>


<div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Segundo Apellido</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="password" name="password" placeholder="Ej: Carrero"></div>

</div>
    </div>

    </div>
    <br>
    <h6>Datos de Acceso</h6><hr>
  <div class="row">
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">Perfil de Usuario</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="perfil" name="perfil" placeholder=""></div>

</div>

<div class="row form-group">
    
    <div class="col-md-3"><label for="exampleInputEmail1" class="secondary">Asignacion</label></div>
    <div class="col-md-9"> <input type="text" class="form-control form-control-sm " id="asignacion" name="asignacion" placeholder=""></div>

</div>
    </div>
    </div>
  
  
  <button type="submit" class="btn btn-success btn-sm" value="Guardar">Guardar</button>

</form>

  </div>
</div>

@endsection