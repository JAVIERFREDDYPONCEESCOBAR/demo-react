@extends('layouts.usuario')

@section('content-admin')


  <div class="container-fluid">
      <div class="separadorheader"></div>
    <div class="row">

      

   <div class="col-md-2 sin-padding">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.admin') }}"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Inicio</a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="#"> <i class="zmdi zmdi-book zmdi-hc-lg"></i> Pedidos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"> <i class="zmdi zmdi-shopping-basket zmdi-hc-lg"></i> Productos </a>
            </li>


          </ul>
        </div>
    </div>

  
      <div  class="col-md-10">
          <div class="chartjs-size-monitor"></div>
       

    </div>
    </div>
  </div>


@endsection