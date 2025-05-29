<div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">Kriteria 2</li>
          <li class="nav-item">
            <a href="{{ url('penetapan2') }}" class="nav-link {{ ($activeMenu == 'penetapan')? 'active' : '' }} ">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Penetapan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pelaksanaan2') }}" class="nav-link {{ ($activeMenu == 'pelaksanaan')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Pelaksanaan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('evaluasi2') }}" class="nav-link {{ ($activeMenu == 'evaluasi')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Evaluasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pengendalian2') }}" class="nav-link {{ ($activeMenu == 'pengendalian')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Pengendalian</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('peningkatan2') }}" class="nav-link {{ ($activeMenu == 'peningkatan')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Peningkatan</p>
            </a>
          </li>
          <li class="nav-header">Feedback</li>
          <li class="nav-item">
            <a href="{{ url('feedback2') }}" class="nav-link {{ ($activeMenu == 'feedback')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Lihat Data</p>
            </a>
          </li>
    </ul>
  </nav>
</div>