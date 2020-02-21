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
              <h2>Bienvenido: {{Auth::user()->name}}</h2>
            </div>
            <div class="col-md-6 text-right">
              <h2>Productos de cliente index</h2>
            </div>
          </div>
          </div>
          
        </div>
       
  





  
 
    </div>
  </div>

@endsection