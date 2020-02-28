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
                <h2>Editar usuario : {{$user->name}}</h2>
              </div>
              <div class="col-md-6 ">
                <ul>
                  <li>

                    <a class="btn_agregar_user" href="{{route('admin.users.index')}}">
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

            <form action="{{route('admin.users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
              @method('PATCH')
                @csrf
                 <div class="form-group">
                     <label for="sku">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" value="{{$aeditar->name}}">
                 </div>
                 <div class="form-group">
                     <label for="email">Correo electrónico</label>
                     <input type="email" class="form-control" id="email" name="email" value="{{$aeditar->email}}">
                 </div>
            
                 <div class="form-group row">
                    <div class="col-md-6">
                     <label for="edad">Edad</label>
                     <input type="number" class="form-control" id="edad" name="edad" value="{{$aeditar->edad}}">
                    </div>
            
                    <div class="col-md-6">
                     <label for="telefono">Teléfono</label>
                     <input type="phone" class="form-control" id="telefono" name="telefono" value="{{$aeditar->telefono}}">
                    </div>
                 </div>
            
            
                 <div class="form-group row">
                    <div class="col-md-6">
                    <label for="genero">Genero</label>
                     <select id="genero" name="genero" class="custom-select" required>
                        <option value="" disabled selected>Selecciona una opción</option>

                        @if($aeditar->genero=='Masculino')
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Femenino">Femenino</option>
                        @elseif($aeditar->genero=='Femenino')
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino" selected>Femenino</option>
                        @endif 
                      </select>
                 </div>
                    <div class="col-md-6">
                    <label for="tipo_usuario">Tipo rol </label>
                    <select id="tipo_usuario" name="tipo_usuario" class="custom-select" required>
                       <option value="" disabled selected>Selecciona una opción</option>
                       
                       @foreach ($roles as $role)
                             @if($actualroll==$role->name)  
                             <option value="{{$role->id}}"   selected>{{$role->name}}</option>
                             @else
                               <option value="{{$role->id}}"   >{{$role->name}}</option>
                             @endif 
                       @endforeach


                     </select>
                </div>
            </div>

            
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="password" >{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  value="{{$aeditar->password}}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{$aeditar->password}}">
                    </div>
            </div>
                 <button class="btn-agregar-user" type="submit">Actualizar</button>
             </form>
            </div>
            
  
 
    </div>
  </div>

@endsection