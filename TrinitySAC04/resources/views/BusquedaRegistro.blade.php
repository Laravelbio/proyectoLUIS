@extends('layouts.menuItems')

@section('content')


<div class="card" style="background:#ffffffee;">


                                  <div class="card-header">
                                    <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                                        <li class="breadcrumb-item" style="color:#6610f2;">Reportes</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Buscar Registro</li>
                                    </ol>
                                  </div>



                            <div class="card-body">    
                              <form>
                                
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="row form-group">                                  
                                        <div class="col-md-1"><label for="exampleInputEmail1" class="secondary"></label></div>
                                          <div class="col-md-4"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Documento"></div>                                                                                             
                                            <label for="exampleInputEmail1" class="secondary"></label>
                                              <div class="col-md-2"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder="Codigó Abonado"></div>                                                          
                                                <label for="exampleInputEmail1" class="secondary"></label>
                                                  <div class="col-md-2"> 
                                                      <select name="" id="" class="form-control form-control-sm">
                                                        <option value=""></option>
                                                      </select>
                                                  </div>                                
                                            <div class="col-md-1"><button type="submit"  class="btn btn-primary btn-sm btn-block"value="Guardar">Buscar</button></div>
                                      </div>
                                    </div>
                                  </div>

                              </form>
                            </div>
</div>

@endsection