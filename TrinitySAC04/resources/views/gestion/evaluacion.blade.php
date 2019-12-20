@extends('layouts.menuItems')

@section('content')



<div class="card" style="background:#ffffffee;">
  <div class="card-header" >
  

  <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                        <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Evaluación</li>
                      </ol>


  </div>
  <div class="card-body">
    
  <form>
 
  <div class="row">
    <div class="col-md-6">

    <div class="row form-group">
    
        <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">DNI Cliente</label></div>
        <div class="col-md-6"> 
        <input type="text" class="form-control form-control-sm " id="dni" name="dni" value="" placeholder="12">
        </div>
        <div class="col-md-2"><label for="exampleInputEmail1" class="secondary"><a href="{{ route('cliente') }}" target="popup"
onClick="window.open(this.href, this.target, 'toolbar=0 , location=1 , status=0 , menubar=1 , scrollbars=0 , resizable=1 ,left=150pt,top=150pt,width=900px,height=600px'); return false;"><img src="../img/lupa.png" width="20 alt=""></a></label></div>
    </div>

    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Dirección Cliente</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="dni" name="dni" placeholder="Ej: Av Libertador calle 5 casa nro 4"></div>
    
    </div>

    </div>

    <div class="col-md-6">

    <div class="row form-group">
    
        <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nombres Cliente</label></div>
        <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
    </div>

    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Telefono Cliente</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="dni" name="dni" placeholder=""></div>
    
    </div>

    </div>

    </div>

  <div class="row">
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Vendedor</label></div>
    <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select></div>

</div>

      <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Departamento</label></div>
    <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select></div>
</div>
</div>
  
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Email Vendedor</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>

</div>


<div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Provincia</label></div>
    <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select></div>
</div>
    </div>

    </div>
    

  <div class="row">
    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Distrito</label></div>
    <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select></div>
</div>

<div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Coordenadas</label></div>
    <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>

</div>
    </div>

    <div class="col-md-6">
    
    <div class="row form-group">
    
    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Póliza</label></div>
    <div class="col-md-8"> <select name="" id="" class="form-control form-control-sm">
    <option value="">SELECCIONE UNA OPCION</option>
    
    </select></div>
</div>

<div class="col-md-6"></div>
 
 
</div>

    </div>
    <div class="row">
<div class="col-md-2">Observaciones</div>

<div class="col-md-10"> 

<textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>


</div>
</div>
  <hr>
  <button type="submit" class="btn btn-success btn-sm btn-block" value="">Registrar Visita Tecnica</button>

</form>

  </div>
</div>
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection