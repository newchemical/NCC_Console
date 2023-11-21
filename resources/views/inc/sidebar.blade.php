<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NCC Console</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
            <a href="{{route('profile')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                HR Department
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('getAllEmployee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('userRegisterForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registeration</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('productForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Registeration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('productlistPage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Companies
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('companyRegisterForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Companies Registeration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companydepartmentform')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('agentregistrationform')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Agent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companyRegisterForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companylist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companydepartmentform')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Depafrment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quotation
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('quotationForm')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create Quotation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companylist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>