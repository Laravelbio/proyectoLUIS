@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">
  
               <div class="card-header" >
                 <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                   <li class="breadcrumb-item" style="color:#6610f2;">Seguimiento</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Agenda Orden Trabajo</li>
                 </ol>
               </div>


                <div class="card-body">  
                  <form>
                    <div class="row">

                      <div class="col-md-6">
                        <div class="row form-group">                            
                          <div class="col-md-2"><label for="exampleInputEmail1" class="secondary">Buscar Fecha:</label></div>
                          <div class="col-md-4"><input name="date" id="date" class="form-control" style="width: 100%; display: inline;" required="" value="" type="date"></div>
                         <button type="submit" class="" value="Guardar"><img src="../img/lupa.png" width="25 alt=""></button>
                        </div>
                      </div>
  
                    </div>
                  </form>
                </div>
</div>

@endsection