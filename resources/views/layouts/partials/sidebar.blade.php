<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="{{ route('usuarios.show', Auth::user()->id) }}" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Cuenta</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fe-log-out mr-1"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                </div>
            </div>
            <p class="text-muted">Panel de Administrador</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="calendar"></i>
                        <span> Principal </span>
                    </a>
                </li>
                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="{{ route('clientes.index') }}">
                        <i data-feather="users"></i>
                        <span> Clientes </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('grupos.index') }}">
                        <i data-feather="share-2"></i>
                        <span> Grupos </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pagos.index') }}">
                        <i data-feather="file-text"></i>
                        <span> Prestamos </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('semanas.index') }}">
                        <i data-feather="calendar"></i>
                        <span> Semanas </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
