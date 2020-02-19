<div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.admin') }}"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="zmdi zmdi-accounts-outline zmdi-hc-lg"></i> Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.productos') }}"> <i class="zmdi zmdi-shopping-basket zmdi-hc-lg"></i> Productos </a>
          </li>

          <li class="nav-item">
            <form class="btn_admin" action="{{ route('logout') }}" method="POST">
             <i class="zmdi zmdi-square-right zmdi-hc-lg"></i>
              @csrf
              @method('POST')
              <button type="submit" class="btn">Salir</button>
            </form>
        </li>

        </ul>
      </div>