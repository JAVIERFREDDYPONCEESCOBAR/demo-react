@extends('layouts.admin')

@section('content-admin')

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Smokeshopmex</a>
   
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#"><i class="zmdi zmdi-sign-in zmdi-hc-2x"></i></a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
      <div class="separadorheader"></div>
    <div class="row">



   <div class="col-md-2 sin-padding-left">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.admin') }}"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="zmdi zmdi-accounts-outline zmdi-hc-lg"></i> Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <i class="zmdi zmdi-book zmdi-hc-lg"></i> Ordenes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> <i class="zmdi zmdi-shopping-basket zmdi-hc-lg"></i> Productos </a>
            </li>


          </ul>
        </div>
    </div>

  
      <div  class="col-md-10">
          <div class="chartjs-size-monitor"></div>
       
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Inicio</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">admin</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              This week
            </button>
          </div>
        </div>
  
      
       
    </div>
    </div>
  </div>


@endsection