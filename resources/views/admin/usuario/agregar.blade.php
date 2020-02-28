@extends('layouts.admin')
@section('content-admin')

  <div class="container-fluid sin-padding">

   <div class="color-menu-admin">
    @include('admin.menu')
    </div>

  
      <div  class="col-md-10 offset-md-2">

        <div class="borde-monitor">
          <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h2>Crear usuario</h2>

    

            </div>
            <div class="col-md-6 ">
              <ul>

                <li>
                  <a class="btn_agregar_user" href="{{ route('admin.users.index')}}">
                    <i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i> 
                    Regresar
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
         <input type="text" class="form-control {{ $errors->has('nombre') ? ' has-error' : '' }}" id="nombre" name="nombre" value="{{old('nombre')}}">
         @if ($errors->has('nombre') )
           <code>{{$errors->first('nombre')}}</code>
         @endif
     </div>
     <div class="form-group">
         <label for="email">Correo electrónico</label>
         <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
         @if ($errors->has('email') )
            <code>{{$errors->first('email')}}</code>
         @endif
     </div>

     <div class="form-group row">
        <div class="col-md-6">
         <label for="edad">Edad</label>
         <input type="number" class="form-control" id="edad" name="edad" value="{{old('edad')}}">
         @if ($errors->has('edad'))
            <code>{{$errors->first('edad')}}</code>
         @endif
        </div>

        <div class="col-md-6">
         <label for="telefono">Teléfono</label>
         <input type="phone" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
         @if ($errors->has('telefono') )
            <code>{{$errors->first('telefono')}}</code>
         @endif
        </div>
     </div>


     <div class="form-group row">
      <div class="col-md-6">
      <label for="genero">Genero</label>
       <select id="genero" name="genero" class="custom-select" required>
          <option value="" disabled selected>Selecciona una opción</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
        @if ($errors->has('genero') )
          <code>{{$errors->first('genero')}}</code>
       @endif

   </div>
      <div class="col-md-6">
      <label for="tipo_usuario">Tipo rol</label>
      <select id="tipo_usuario" name="tipo_usuario" class="custom-select" required>
         <option value="" disabled selected>Selecciona una opción</option>
         @foreach ($roles as $role)
             <option value="{{$role->name}}">{{$role->name}}</option>
         @endforeach
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

            @if ($errors->has('password') )
            <code>{{$errors->first('password')}}</code>
            @endif


        </div>
        <div class="col-md-6">
            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @if ($errors->has('password_confirmation') )
            <code>{{$errors->first('password_confirmation')}}</code>
            @endif
          </div>
</div>
     <button class="btn-agregar-user" type="submit">+ Agregar</button>
 </form>
</div>

</div>
</div>


@endsection