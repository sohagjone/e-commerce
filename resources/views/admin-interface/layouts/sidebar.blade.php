<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
<img src="{{asset('admin-interface/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SofTechLove</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin-interface/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2')}}" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category_form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Add</p>
                </a>
                 <a href="{{route('manage_category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product_form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Add</p>
                </a>
                 <a href="{{route('manage_product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Manage</p>
                </a>
                <a href="{{route('order_manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Manage</p>
                </a>
              </li> 
            </ul>
          </li>        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>