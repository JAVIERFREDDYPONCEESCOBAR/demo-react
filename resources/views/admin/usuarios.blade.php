@extends('layouts.admin')

@section('content-admin')

  <div class="container-fluid">
    <div class="row">



   <div class="col-md-2 sin-padding">
    @include('admin.menu')
    </div>

  
      <div  class="col-md-10 ">
        <div class="borde-monitor">
          <h2>Usuarios</h2>
        </div>
       
  
      
  <section class="marco-control">
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Role</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Edad</th>
          <th scope="col">Genero</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user )
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->id}}</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
              
          @endforeach

       
    
      </tbody>
    </table>
    </div>
    
</section>



       
    </div>
    </div>
  </div>


  @endsection