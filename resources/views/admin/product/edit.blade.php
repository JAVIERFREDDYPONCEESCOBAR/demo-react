@extends('layouts.admin')

@section('content-admin')

  <div class="container-fluid sin-padding">

   <div class="color-menu-admin">
    @include('admin.menu')
    </div>

  
      <div  class="col-md-11 offset-md-1">

        <div class="borde-monitor">
            <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2>Editar produsto : </h2>
              </div>
              <div class="col-md-6 ">
                <ul>
                  <li>

                    <a class="btn_agregar_user" href="{{route('admin.productos.index')}}">
                      <i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i> 
                      Regresar
                    </a>


                  </li>
                </ul>
              </div>
            </div>
            </div>
            
          </div>
       
          <div  class="col-md-10">

            <form action="{{route('admin.productos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="form-group">
                     <label for="sku">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" value="{{$aeditar->name}}">
                 </div>
                 <div class="form-group">
                     <label for="email">Correo electrónico</label>
                     <input type="email" class="form-control" id="email" name="email" value="{{$aeditar->email}}">
                 </div>
            
                
                 <button class="btn-agregar-user" type="submit">Actualizar</button>
             </form>



            </div>
            
  
 
    </div>
  </div>

@endsection