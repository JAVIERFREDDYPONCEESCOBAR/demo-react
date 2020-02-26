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
              <ul>

                <li>
                  <a class="btn_agregar_user" href="#">
                    <i class="zmdi zmdi zmdi-chart-donut zmdi-hc-lg"></i> 
                    Agregar Productos a usuario
                  </a>
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
                <th scope="col">Imagen</th>
                <th scope="col">Sku</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Existencias</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                <tr>
                  <th class="num_id">              
                    <div class="alinear">
                    <label>#{{$product->id}}
                    </label>
                    </div>
                  </th>
                  <td>
                    <div class="alinear">
                    <img class="img-responsive" src="{{$product->img}}">
                  </div>
                   </td>
                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->sku}}
                      </label>
                    </div>
                      </td>
                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->nombre}}
                      </label>
                    </div>
                  </td>
                  
                  <td class="correo">
                    <div class="alinear">
                      <label>
                    {{$product->precio}}
                      </label>
                    </div>
                  </td>
      
                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->descripcion}}
                      </label>
                    </div>
                  </td>

                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->existencias}}
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->marcas_id}}
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="alinear">
                      <label>
                        {{$product->categoria_id}}
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="alinear">

      
                     <a href="" class="btn-table"><i class="zmdi zmdi-edit"></i> Editar</a>
                    <form class="btn_admin" action="" method="GET">
                      @csrf
                      @method('GET')
                    </form>
      
                     <a href="" class="btn-table"> <i class="zmdi zmdi-delete"></i> Eliminar</a>
                    <form class="btn_admin" action="" method="DELETE">
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