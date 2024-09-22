<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./admin" class="brand-link" style="text-align: center">

        <span class="brand-text font-weight">ADMİN PANEL</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="#" class="img-circle elevation-2" alt="User Image">
                <!-- -->
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link inactive">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ANASAYFA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item menu-open">
          <a href="#" class="nav-link inactive">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              KURUMSAL
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./hakkimizda" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Hakkımızda</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./miss" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Misyonumuz</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./vizyon" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Vİzyonumuz</p>
              </a>
            </li>
          </ul>
        </li> -->

        <!-- start side bar css-->
                <style>
                    .nav-link.inactive {
                        color: rgb(255, 255, 255) !important;
                        background-color: rgba(50, 50, 50, 0.615) !important;

                    }

                    [class*=sidebar-dark-] {
                        background: linear-gradient(to bottom, #4c00ff, #678bb2);
                    }

                    [class*=sidebar-dark] .form-control-sidebar {
                        background-color: #ffffff;
                        border: 1px solid #56606a;
                        color: #050505;
                    }

                    [class*=sidebar-dark] .btn-sidebar,
                    [class*=sidebar-dark] .form-control-sidebar {
                        background-color: #ffffff;
                        border: 1px solid #56606a;
                        color: #000000;
                    }
                </style>
        <!-- end side bar css-->
                <li class="nav-item menu-open">
                    <a href="{{ route('users.index') }}" class="nav-link inactive">
                        <p>
                            KULLANICILAR
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('roles.index') }}" class="nav-link inactive">
                        <p>
                            ROLLER
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link inactive">
                        <p>
                            MENÜLER
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('bolge.index') }}" class="nav-link inactive">
                        <p>
                            BÖLGE YÖNETİMİ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('kategoriler.index') }}" class="nav-link inactive">
                        <p>
                            KATEGORİ YÖNETİMİ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('sayfalar.index') }}" class="nav-link inactive">
                        <p>
                            SAYFA YÖNETİMİ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>


                <li class="nav-item menu-open">
                    <a href="{{ route('mekanlar.index') }}" class="nav-link inactive">
                        <p>
                            MEKAN YÖNETİMİ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link inactive">
                        <p>
                            SLIDER
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    </ul>
                </li>



                <li class="nav-item menu-open">
                    <a href="#" class="nav-link inactive">

                        <p>
                            SİTE AYARLARI
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('forms.index') }}" class="nav-link inactive">

                        <p>
                            İLETİŞİM
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link inactive">
                        <p>
                            PROFİL
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('blogs.index') }}" class="nav-link inactive">
                        <p>
                            BLOG YÖNETİMİ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="ev" class="nav-link inactive" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p>
                            Çıkış
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
