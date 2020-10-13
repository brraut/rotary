<!DOCTYPE html>
<html>

  @include('dashboard.includes.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
     
    </ul> 
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
    

        <a class="nav-link btn btn-sm btn-danger" data-toggle="dropdown" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <span style="color: white;">Logout</span>
          
        </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
       
      </li>
     
      
    </ul>
  </nav>
  <!-- /.navbar -->

@include('dashboard.includes.sidebar')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @include('dashboard.includes.breadcrumb')
    
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="#">Rotary Club of Durbarmarg</a>.</strong>
    All rights reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  @include('dashboard.includes.scripts')
</body>
</html>
