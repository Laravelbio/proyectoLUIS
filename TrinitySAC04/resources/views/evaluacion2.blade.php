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
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>DNI Cliente</h6></label></div>
                                          <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder="12"></div>
                                          <div class="col-md-2"><label for="exampleInputEmail1" class="secondary"><img src="../img/lupa.png" width="20 alt=""></label></div>
                                        </div>


                                        <div class="row form-group"> 
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Dirección Cliente</h6></label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="dni" name="dni" placeholder="Ej: Av Libertador calle 5 casa nro 4"></div>  
                                        </div>
                                      </div>


                                      <div class="col-md-6">
                                        <div class="row form-group">   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Nombres Cliente</h6></label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
                                        </div>


                                        <div class="row form-group">   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Telefono Cliente</h6></label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="dni" name="dni" placeholder=""></div>   
                                        </div>
                                      </div>

                                  </div>

{{-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                                  <div class="row">

                                      <div class="col-md-6">  
                                        <div class="row form-group">   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Vendedor</h6></label></div>
                                          <div class="col-md-8"> 
                                            <select name="" id="" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>  
                                            </select>
                                          </div>
                                        </div>



                                        <div class="row form-group">   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Departamento</h6></label></div>
                                          <div class="col-md-8">
                                            <select name="" id="" class="form-control form-control-sm">
                                              <option value="">SELECCIONE UNA OPCION</option>   
                                            </select>
                                          </div>
                                        </div>
                                      </div>
  


                                      <div class="col-md-6">  
                                          <div class="row form-group">  
                                            <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Email Vendedor</h6></label></div>
                                            <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>
                                          </div>


                                        <div class="row form-group">   
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Provincia</h6></label></div>
                                            <div class="col-md-8"> 
                                              <select name="" id="" class="form-control form-control-sm">
                                                <option value="">SELECCIONE UNA OPCION</option>   
                                              </select>
                                            </div>
                                        </div>
                                      </div>

                                  </div>
    
{{-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}


                                        <div class="row">

                                          <div class="col-md-6">  
                                            <div class="row form-group">
                                              <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Distrito</h6></label></div>
                                              <div class="col-md-8"> 
                                                <select name="" id="" class="form-control form-control-sm">
                                                  <option value="">SELECCIONE UNA OPCION</option>
                                                </select>
                                              </div>
                                            </div>


                                          



                                            
                                              <div class="row form-group"> 
                                                <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Tipo Póliza</h6></label></div>
                                                  <div class="col-md-8"> 
                                                    <select name="" id="" class="form-control form-control-sm">
                                                      <option value="">SELECCIONE UNA OPCION</option>  
                                                    </select>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>


{{-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}


  <br>
                                        <div class="row">
                                          <div class="col-md-6">  
                                            <div class="row form-group">
                                               <div class="col-md-4"><label for="exampleInputEmail1" class="secondary"><h6>Coordenadas</h6></label></div>
                                               <div class="col-md-4"> <input type="text" class="form-control form-control-sm " id="" name="" placeholder=""></div>
                                            </div>
                                          </div>
                                        </div>



<br>
                                        <div class="row">
                                          <div class="col-md-2"><h6>Observaciones:</h6></div>
                                          <div class="col-md-10"> 
                                            <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>
                                          </div>
                                        </div>
                                                                                 

                                                                                 
{{-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}

                            <button type="submit" class="btn btn-success btn-sm btn-block" value="">Registrar Visita Tecnica</button>

    </form>
  </div>
</div>
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection