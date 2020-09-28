@include('Layouts/partials/__head_home')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('Layouts/partials/__header_nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('Layouts/partials/__asideUser')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('container')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.12
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Rapha Ondobo </a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
    @include('Layouts/partials/__sideBarControl')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar s background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('Layouts/partials/__include_foot')

