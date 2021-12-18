<!DOCTYPE html>
<html lang="en">
<head>
  @include("template.head")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include("template.preloader")
  @include("template.navbar")
  <!-- Main Sidebar Container -->
 @section("sidebar")
@show

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      @section("main-section")
      @show
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include("template.footer")
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include("template.js")
@section('js')
@show
</body>
</html>
