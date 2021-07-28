
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ setting('site_title') }} | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
 <style>/*!
    * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
    * Copyright 2015 Daniel Cardoso <@DanielCardoso>
    * Licensed under MIT
    */
   .la-ball-clip-rotate,
   .la-ball-clip-rotate > div {
       position: relative;
       -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
               box-sizing: border-box;
   }
   .la-ball-clip-rotate {
       display: block;
       font-size: 0;
       color: #fff;
   }
   .la-ball-clip-rotate.la-dark {
       color: #333;
   }
   .la-ball-clip-rotate > div {
       display: inline-block;
       float: none;
       background-color: currentColor;
       border: 0 solid currentColor;
   }
   .la-ball-clip-rotate {
       width: 32px;
       height: 32px;
   }
   .la-ball-clip-rotate > div {
       width: 32px;
       height: 32px;
       background: transparent;
       border-width: 2px;
       border-bottom-color: transparent;
       border-radius: 100%;
       -webkit-animation: ball-clip-rotate .75s linear infinite;
          -moz-animation: ball-clip-rotate .75s linear infinite;
            -o-animation: ball-clip-rotate .75s linear infinite;
               animation: ball-clip-rotate .75s linear infinite;
   }
   .la-ball-clip-rotate.la-sm {
       width: 16px;
       height: 16px;
   }
   .la-ball-clip-rotate.la-sm > div {
       width: 16px;
       height: 16px;
       border-width: 1px;
   }
   .la-ball-clip-rotate.la-2x {
       width: 64px;
       height: 64px;
   }
   .la-ball-clip-rotate.la-2x > div {
       width: 64px;
       height: 64px;
       border-width: 4px;
   }
   .la-ball-clip-rotate.la-3x {
       width: 96px;
       height: 96px;
   }
   .la-ball-clip-rotate.la-3x > div {
       width: 96px;
       height: 96px;
       border-width: 6px;
   }
   /*
    * Animation
    */
   @-webkit-keyframes ball-clip-rotate {
       0% {
           -webkit-transform: rotate(0deg);
                   transform: rotate(0deg);
       }
       50% {
           -webkit-transform: rotate(180deg);
                   transform: rotate(180deg);
       }
       100% {
           -webkit-transform: rotate(360deg);
                   transform: rotate(360deg);
       }
   }
   @-moz-keyframes ball-clip-rotate {
       0% {
           -moz-transform: rotate(0deg);
                transform: rotate(0deg);
       }
       50% {
           -moz-transform: rotate(180deg);
                transform: rotate(180deg);
       }
       100% {
           -moz-transform: rotate(360deg);
                transform: rotate(360deg);
       }
   }
   @-o-keyframes ball-clip-rotate {
       0% {
           -o-transform: rotate(0deg);
              transform: rotate(0deg);
       }
       50% {
           -o-transform: rotate(180deg);
              transform: rotate(180deg);
       }
       100% {
           -o-transform: rotate(360deg);
              transform: rotate(360deg);
       }
   }
   @keyframes ball-clip-rotate {
       0% {
           -webkit-transform: rotate(0deg);
              -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                   transform: rotate(0deg);
       }
       50% {
           -webkit-transform: rotate(180deg);
              -moz-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                   transform: rotate(180deg);
       }
       100% {
           -webkit-transform: rotate(360deg);
              -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                   transform: rotate(360deg);
       }
   }</style>
 
  <livewire:styles /></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    
                  </p>
                </a>
              </li>
        <li class="nav-item">
                <a href="{{ route('admin.users') }}" class="nav-link {{ (request()->is('admin/users'))?'active':'' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Users
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
        </li>

          <li class="nav-item">
            <a href="{{ route('admin.appointments') }}" class="nav-link {{ (request()->is('admin/appointments'))?'active':'' }}">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Appointments
                
              </p>
            </a>
          </li>
        
         <li class="nav-item">
            <a href="{{ route('admin.settings') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                
              </p>
            </a>
          </li>
          <li class="nav-item">
              <form method="post" action="{{ route('logout') }}">
                @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit()" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
              </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        {{ $slot}}
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('backend/plugins/toastr/toastr.min.js')}}"></script>
<script src="http://unpkg.com/moment"></script>
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script>

    $(document).ready(function() {
        toastr.options = {
  "positionClass": "toast-top-right",
  "progressBar": true,
  
        }

        window.addEventListener('hide-userform', event=>{
        $('#userform').modal('hide');
        toastr.success(event.detail.message, 'Success');
       
    });
  
});
</script>

<script>
  
    window.addEventListener('show-userform', event=>{
        $('#userform').modal('show');
       
    });

    window.addEventListener('show-delete-modal', event=>{
        $('#confirmationModal').modal('show');
       
    });
    window.addEventListener('hide-delete-modal', event=>{
        $('#confirmationModal').modal('hide');
        toastr.success(event.detail.message, 'Success');
       
    });
    window.addEventListener('show-feedback-modal', event=>{
        $('#feedback').modal('show');
        //toastr.success(event.detail.message, 'Success');
       
    });
</script>

@stack('js')
<livewire:scripts />
</body>
</html>
