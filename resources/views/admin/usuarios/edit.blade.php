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
       
  
  
 
    </div>
  </div>

@endsection