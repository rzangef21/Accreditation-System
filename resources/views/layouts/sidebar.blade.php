<div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- Sidebar untuk Input Data--}}
          <li class="nav-header">Input Data</li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'kriteria1')? 'active' : '' }} ">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria2') }}" class="nav-link {{ ($activeMenu == 'kriteria2')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria3') }}" class="nav-link {{ ($activeMenu == 'kriteria3')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria4') }}" class="nav-link {{ ($activeMenu == 'kriteria4')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 4</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria5') }}" class="nav-link {{ ($activeMenu == 'kriteria5')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 5</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria6') }}" class="nav-link {{ ($activeMenu == 'kriteria6')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 6</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria7') }}" class="nav-link {{ ($activeMenu == 'kriteria7')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 7</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria8') }}" class="nav-link {{ ($activeMenu == 'kriteria8')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 8</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('kriteria9') }}" class="nav-link {{ ($activeMenu == 'kriteria9')? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kriteria 9</p>
            </a>
          </li>

          {{-- Sidebar untuk Melihat Data--}}
          <li class="nav-header">Lihat Data</li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 4</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 5</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 6</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 7</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 8</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link {{ ($activeMenu == '')? 'active' : '' }} ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Kriteria 9</p>
            </a>
          </li>
    </ul>
  </nav>
</div>