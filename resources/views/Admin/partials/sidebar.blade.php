<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }} ">
                    <a href="{{route('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/data-kriteria*') ? 'active' : '' }}">
                    <a href="{{route('data-kriteria.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Kriteria</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/data-sub-kriteria*') ? 'active' : '' }}">
                    <a href="{{route('data-sub-kriteria.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Sub Kriteria</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/data-alternatif*') ? 'active' : '' }}">
                    <a href="{{route('data-alternatif.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Alternatif</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('admin/data-penilaian*') ? 'active' : '' }}">
                    <a href="{{route('data-penilaian.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Data Penilaian</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <form action="{{ route('logout-connexion')}}" method="POST">
                        @csrf
                        <button class="sidebar-link dropdown-item d-flex " type="submit">
                            <i class="bi bi-grid-fill"></i>
                            <span>Logout</span>
                        </button>
                      </form>

                   
                </li>

               

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>