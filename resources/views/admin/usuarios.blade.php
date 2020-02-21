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
            <div class="col-md-6 ">
              <ul>

                <li>
                  <a class="btn_agregar_user" href="{{ route('admin.users.edit',Auth::user()->id)}}">
                    <i class="zmdi zmdi-account-add zmdi-hc-lg"></i> 
                    Agregar Usuario
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
       
  
      
  <section class="marco-control">
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="">
        <tr>
          <th class="log-id"><div class="logo-id">#</div></th>
          <th scope="col">Nombre</th>
          <th scope="col">Role</th>
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
            <th class="num_id">              
              <div class="alinear">
              <label>#{{$user->id}}
              </label>
              </div>
              </th>
            <td>
              <div class="alinear">
                <label>
                  {{$user->name}}
                </label>
              </div>
                </td>
            <td>
              <div class="alinear">
                <label>
                </label>
              </div>
            </td>
            
            <td class="correo">
              <div class="alinear">
                <label>
              {{$user->email}}
                </label>
              </div>
            </td>

            <td>
              <div class="alinear"><label></label></div>
            </td>

            <td>
              <div class="alinear">
              <label>
              {{$user->id}}
              <label>
            </div>
             </td>
            <td>
              <div class="alinear"><label></label></div>
            </td>
            <td>
              <div class="alinear">
               <a href="{{route('admin.producto.index')}}" class="btn-table"><i class="zmdi zmdi-eye"></i> Productos</a>
              <form class="btn_admin" action="{{ route('admin.producto.index')}}" method="POST">
                @csrf
                @method('POST')
              </form>

               <a href="" class="btn-table"><i class="zmdi zmdi-edit"></i> Editar</a>
              <form class="btn_admin" action="{{ route('admin.users.edit', $user->id)}}" method="GET">
                @csrf
                @method('GET')
              </form>

               <a href="" class="btn-table"> <i class="zmdi zmdi-delete"></i> Eliminar</a>
              <form class="btn_admin" action="{{ route('admin.users.destroy', $user->id)}}" method="DELETE">
                @csrf
                @method('DELETE')
              </form>

              </div>
            </td>
          </tr>
              
          @endforeach

       
    
      </tbody>
    </table>
    </div>
    
</section>

    </div>
  </div>


  @endsection