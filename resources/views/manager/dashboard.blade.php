<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{asset("Admin 3")}}/dist/css/custom-style.css">

</head>
<body style="direction: ltr">
<div style="direction: ltr;height:100vh" class="float-left">

  <!-- Main Sidebar Container -->
  <aside class=" sidebar-dark-primary float-left " style="direction: ltr;height:100vh" >
    <!-- Brand Logo -->
    <a style="margin-right:  30px" href="{{route("admin_dashboard")}}" class="brand-link">
      <span class="brand-text font-weight-light">{{ Auth::user()->role }}
        Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr" >
      <div >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="direction: ltr">
          <div class="image">
            <img src="https://secure.gravatar.com/avatar/5ffa2a1ffeb767c60ab7e1052e385d5c?s=52&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" style="direction: ltr">
          <ul class="nav nav-pills nav-sidebar flex-column "  role="menu" style="direction: ltr" >
            <li class="nav-item d-flex " style="direction: ltr">
              <a  href="{{ route('task.index') }}" class="nav-link ">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                      All Tasks
                    </p>
              </a>
            </li>
            <li class="nav-item d-flex mt-3" style="direction: ltr">
                <a  href="{{ route('task_pending') }}" class="nav-link ">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Pending Tasks
                      </p>
                </a>
              </li>
              <li class="nav-item d-flex mt-3" style="direction: ltr">
                <a  href="{{ route('task_sent') }}" class="nav-link ">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Sent Tasks
                      </p>
                </a>
              </li>
              <li class="nav-item d-flex mt-3" style="direction: ltr">
                <a  href="{{ route('task_inprogress') }}" class="nav-link ">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Inprogress Tasks
                      </p>
                </a>
              </li>
              <li class="nav-item d-flex mt-3" style="direction: ltr">
                <a  href="{{ route('task_finish') }}" class="nav-link ">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Finished Tasks
                      </p>
                </a>
              </li>
              <li class="nav-item d-flex mt-3" style="direction: ltr">
                <a  href="{{ route('logout') }}" class="nav-link ">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                        Log Out
                    </p>
                </a>
              </li>
          </ul>
        </nav>
        </div>
    </div>
  </aside>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset("Admin 3")}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset("Admin 3")}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset("Admin 3")}}/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{asset("Admin 3")}}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset("Admin 3")}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset("Admin 3")}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("Admin 3")}}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset("Admin 3")}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{asset("Admin 3")}}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("Admin 3")}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset("Admin 3")}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset("Admin 3")}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset("Admin 3")}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("Admin 3")}}/dist/js/pages/dashboard.js"></script>

</body>
<script>

</script>
</html>
