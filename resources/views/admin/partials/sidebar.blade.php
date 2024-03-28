<div class="leftside-menu">

  <!-- Brand Logo Light -->
  <h3 class="logo logo-light">
      PAE
  </h3>

  <!-- Sidebar Hover Menu Toggle Button -->
  <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
      <i class="ri-checkbox-blank-circle-line align-middle"></i>
  </div>

  <!-- Full Sidebar Menu Close Button -->
  <div class="button-close-fullsidebar">
      <i class="ri-close-fill align-middle"></i>
  </div>

  <!-- Sidebar -left -->
  <div class="h-100" id="leftside-menu-container" data-simplebar>
      <!-- Leftbar User -->
      <div class="leftbar-user">
          <a href="pages-profile.html">
              <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
              <span class="leftbar-user-name mt-2">Dominic Keller</span>
          </a>
      </div>

      <!--- Sidemenu -->
      <ul class="side-nav">

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="{{route('home')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                  <i class="uil-home-alt"></i>
                  <span class="badge bg-success float-end">5</span>
                  <span> Resumen </span>
              </a>
          </li>
          <li class="side-nav-item">
              <a href="" class="side-nav-link">
                  <i class="uil-calender"></i>
                  <span> Planificación </span>
              </a>
          </li>
          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                  <i class="uil-bus-school"></i>
                  <span> Escuelas </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarProjects">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="">Todo</a>
                      </li>
                      <li>
                          <a href="">Crear</a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#platos" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                  <i class="uil-clipboard-alt"></i>
                  <span> Platos </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="platos">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="">Todos</a>
                      </li>
                      <li>
                          <a href="">Crear</a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                  <i class="uil-clipboard-alt"></i>
                  <span> Ingredientes </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarTasks">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="">Todos</a>
                      </li>
                      <li>
                          <a href="">Crear</a>
                      </li>
                      <li>
                        <a href="">Proveedores</a>
                    </li>
                  </ul>
              </div>
          </li>
          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                  <i class="uil-chart"></i>
                  <span> Reportes </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCharts">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="">Reporte 1</a>
                      </li>
                      <li>
                          <a href="">Reporte 2</a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                <i class="uil-users-alt"></i>
                <span> Usuarios </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="users">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="">Todos</a>
                    </li>
                    <li>
                        <a href="">Crear</a>
                    </li>
                </ul>
            </div>
        </li>
      </ul>
      <!--- End Sidemenu -->

      <div class="clearfix"></div>
  </div>
</div>