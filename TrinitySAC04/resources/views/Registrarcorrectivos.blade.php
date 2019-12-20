
@extends('layouts.menuItems')

@section('content')
<br>
<div class="card" style="background:#ffffffee;">



                      <div class="card-header">
                        <ol class="breadcrumb" style="background: rgba(68, 68, 71, 0);">
                          <li class="breadcrumb-item" style="color:#6610f2;">Gestión</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Ingreso de Correctivos</li>
                        </ol>
                      </div>



              <div class="card-body">
              
                  
                              <legend><h6 style="font-weight: 700">INFORMACIÓN CORRECTIVOS</h6></legend><br>
    <form>
 
                    <div class="row">

                      <div class="col-md-6">                    
                        <div class="row form-group">
                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Ejecutivo Comercial</label></div>
                          <div class="col-md-8">
                              <select name="" id="" class="form-control form-control-sm">
                                  <option value="">SELECCIONE UNA OPCION</option>
                              </select>
                          </div>
                        </div>
                          


                        <div class="row form-group"> 
                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Póliza</label></div>
                          <div class="col-md-8"> 
                              <select name="" id="" class="form-control form-control-sm">
                                    <option value="">SELECCIONE UNA OPCION</option>
                                    <option value="HOGAR">HOGAR</option>
                                    <option value="EMPRESA">EMPRESA</option>
                              </select>
                          </div>
                        </div>
                      </div>




                      <div class="col-md-6">
                        <div class="row form-group">                     
                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Supervisor</label></div>
                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder=""></div>
                                {{-- se llena automaticamente, cuando se seleciona el ejecutivo Comercial,    Ejecutivo Comercial-->Supervisor --}}
                        </div>

                          <div class="row form-group">
                              <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Instalación</label></div>
                              <div class="col-md-8"> 
                                  <select name="" id="" class="form-control form-control-sm">
                                  <option value="">SELECCIONE UNA OPCION</option>
                                  {{-- se hace el llamado de la base de dato para los tipos de instalaciones que hay en el sistemas --}}
                                  </select>
                              </div>
                          </div>
                      </div>

                    </div>



                              <br><br>
                              <legend><h6 style="font-weight: 700">INFORMACIÓN CLIENTE</h6></legend>
<br>
                        <div class="row">

                              <div class="col-md-6">  

                                <div class="row form-group">
                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tipo Documento</label></div>
                                  <div class="col-md-8"> 
                                      <select name="" id="" class="form-control form-control-sm">
                                       <option value="">SELECCIONE UNA OPCION</option>
                                       <option value="DNI">DNI</option>
                                       <option value="RUC">RUC</option>
                                       <option value="CE">CARNE DE EXTRANJERÍA</option>
                                      </select>
                                  </div>
                                </div>
                          


                                <div class="row form-group"> 
                                 <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Código Abonado</label></div>
                                 <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                </div>
                              
                              </div>




                          <div class="col-md-6">
                            <div class="row form-group">                      
                                <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Documento</label></div>
                                <div class="col-md-6"> <input type="text" class="form-control form-control-sm " id="id" name="id" placeholder="123456789"></div>
                                <div class="col-md-2"><label for="exampleInputEmail1" class="secondary"><img src="../img/lupa.png" width="30 alt=""></label></div>
                            </div>


                            <div class="row form-group">
                                 <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nombres</label></div>
                                 <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder=""></div>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                              <div class="row form-group">
                                <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Apellidos</label></div>
                                <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="Apellidos" name="Apellidos" placeholder=""></div>
                              </div> 
                            </div>
               

                          <div class="col-md-6">  
                            <div class="row form-group">
                              <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Dirreción</label></div>
                              <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="dirrecion" name="dirrecion" placeholder="Ej:Av Libertador calle 5 casa nro 4"></div>
                            </div>
                          </div>

                        </div>       

                     

                              <div class="row">

                                <div class="col-md-6">
                  
                                  <div class="row form-group">
                                    <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Departamento</label></div>
                                    <div class="col-md-8">
                                        <select name="" id="" class="form-control form-control-sm">
                                          <option value="">SELECCIONE UNA OPCION</option>
                                          {{-- la seleccion de Departamento(Estado) se toma de la base de dato como Option select --}}
                                        </select>
                                    </div>
                                  </div>
                          

                                    <div class="row form-group"> 
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Distrito</label></div>
                                      <div class="col-md-8">
                                        <select name="" id="" class="form-control form-control-sm">
                                           <option value="">SELECCIONE UNA OPCION</option>
                                          {{-- la seleccion de Distrito se toma de la base de dato como Option select esta se activa cuando se seleciona 
                                          la provincia --}}
                                        </select>
                                      </div>
                                    </div>

                                </div>


                                  <div class="col-md-6">

                                    <div class="row form-group">                      
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Provincia</label></div>
                                      <div class="col-md-8">
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">SELECCIONE UNA OPCION</option>
                                          {{-- la seleccion de provincia(Cuidad) se toma de la base de dato como Option select luego de tomar la opcion de 
                                          Departamento(Estado)  esta opcion se Activa para hacer la seleccion de provincia(cuidad) que hay en ese departamento(estados) 
                                            ejemplo: selecione: "Portuguesa" en Departamento --> se activo provincia para selecionar(Guanare, Acarigua, San Rafale de onoto Etc) igual se encuentra en la base de dato --}}
                                        </select>
                                      </div>
                                    </div>



                                    <div class="row form-group">
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Telefono Celular</label></div>
                                      <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder=""></div>
                                    </div>
                                    
                                  </div>

                              </div>  


                             
                                <div class="row">
                                  <div class="col-md-6">           
                                    <div class="row form-group">
                                       <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Nro Poliza</label></div>
                                       <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo2" name="correo2" placeholder=""></div>
                                    </div>                            
                                  </div>                                
                                



                                <div class="col-md-6">
                                  <div class="row form-group">
                                      <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Referencia</label></div>
                                     <div class="col-md-6">  <textarea id="referencia" class="form-control" cols="2" rows="2"></textarea></div>
                                  </div>
                                </div>  
                              </div> 
                                


                            <div class="row">

                              <div class="col-md-6">  

                                <div class="row form-group">
                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Asistencia</label></div>
                                  <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                </div>
                          

                                <div class="row form-group"> 
                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Hora Llamada</label></div> 
                                  <div class="col-md-8"><input id="horallamada" class="form-control" type="time" value="$horahoy;>"></div>
                                </div>

                              </div>


                              <div class="col-md-6">
                                <div class="row form-group">                     
                                  <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Fecha Llamada</label></div>
                                  <div class="col-md-8"> <input id="fechallamada" class="form-control" type="date" value="$FECHA_HOY;"></div>
                                </div>                         
                              </div>

                            </div>
                        




                            <div class="row">

                                        <div class="col-md-6">
                  
                                         <div class="row form-group">
                                           <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Contacto</label></div> 
                                           <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                         </div>
                          

                                          <div class="row form-group"> 
                                              <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Asunto</label></div>
                                              <div class="col-md-8">
                                                <select name="" id="" class="form-control form-control-sm">
                                                  <option value="">SELECCIONE UNA OPCION</option>
                                                   {{-- Seleccion de la base de Dato (1Programacion Técnica, 2Garantía Service, 3Preventivos), y en TEMA se activa para hacer la selecion segun
                                                   lo que se aplica aca de los 3--}}
                                                </select>
                                              </div>
                                          </div>
         
                                        </div>


                                      <div class="col-md-6">

                                        <div class="row form-group">                     
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Número Contacto</label></div>
                                          <div class="col-md-8"> <input type="text" class="form-control form-control-sm " id="correo1" name="correo1" placeholder=""></div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-md-4"><label for="exampleInputEmail1" class="secondary">Tema</label></div>
                                          <div class="col-md-8">
                                            <select name="" id="" class="form-control form-control-sm">
                                                      <option value="">SELECCIONE UNA OPCION</option>
                                              {{-- esta opcion se activa cuando se selecciona en "ASUNTO" la cual activa segun las 3 opciones
                                              1 programacion Tecnica: Cambio de bateria llavero.   Correctivo con 1 Adicional, 2, 3, 4, 5.   ETC   
                                               2 Garantia Service: Garantia inslacion.  ETC
                                               3 Preventivo: Mantenimiento.  ESTO ESTARIA EN LA BASE DE DATO Y SE ACTIVARIA SEGUN EL ASUNTO QUE SE SELECCIONE. --}}
                                            </select>
                                          </div>
                                        </div>
      
                                      </div>  

                            </div>  
                        

                                      <br>
                                      <div class="row">
                                        <div class="col-md-6"><h6>Observaciones:</h6></div>
                                      </div>
                                      <br>  
                                    
                                    <div class="col-md-8">
                                      <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>
                                    </div>
                                  

                                      <hr>
                                      <button type="submit" class="btn btn-success btn-sm btn-block" value="">Agendar</button>

  </form>
   <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
</div>
@endsection