<!DOCTYPE html>
<html lang="en">
<head>
@include('admin-interface/layouts/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!--Navbar-->
 @include('admin-interface/layouts/navbar')
 <!--Sidebar-->
 @include('admin-interface/layouts/sidebar')
 <!--Containter-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	 @yield('dashboard')
      </div><!-- /.container-fluid -->
    </section>
  </div>
 <!--footer-->	
 @include('admin-interface/layouts/footer')
</div>
</body>
</html>
