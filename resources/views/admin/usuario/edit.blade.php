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
                <h2>Bienvenido: {{Auth::user()->name}}</h2>
              </div>
              <div class="col-md-6 ">
                <ul>
                  <li>
                    <a class="btn_agregar_user" href="#">
                      <i class="zmdi zmdi-account-add zmdi-hc-lg"></i> 
                      Editar Usuario
                    </a>
                    <form class="form_agregar_user" action="" method="GET">
                      @csrf
                      @method('GET')
                    </form>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            
          </div>
       
          <div  class="col-md-10">

            <form action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <div class="form-group">
                     <label for="sku">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" value="">
                 </div>
                 <div class="form-group">
                     <label for="email">Correo electrónico</label>
                     <input type="email" class="form-control" id="email" name="email" value="">
                 </div>
            
                 <div class="form-group row">
                    <div class="col-md-6">
                     <label for="edad">Edad</label>
                     <input type="number" class="form-control" id="edad" name="edad" value="">
                    </div>
            
                    <div class="col-md-6">
                     <label for="telefono">Teléfono</label>
                     <input type="phone" class="form-control" id="telefono" name="telefono" value="">
                    </div>
                 </div>
            
            
                 <div class="form-group row">
                    <div class="col-md-6">
                    <label for="genero">Genero</label>
                     <select id="genero" name="genero" class="custom-select" required>
                        <option value="" disabled selected>Selecciona una opción</option>
                        <option value="1">M</option>
                        <option value="2">F</option>
                      </select>
                 </div>
                    <div class="col-md-6">
                    <label for="tipo_usuario">Tipo rol</label>
                    <select id="tipo_usuario" name="tipo_usuario" class="custom-select" required>
                       <option value="" disabled selected>Selecciona una opción</option>
                       <option value="admin">Administrador</option>
                       <option value="cliente">Cliente</option>
                       {{-- <option value="user">Usuario</option> --}}
                     </select>
                </div>
            </div>
            
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="password" >{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
            </div>
                 <button class="btn-agregar-user" type="submit">+ Agregar</button>
             </form>
            </div>
            
  
 
    </div>
  </div>

@endsection