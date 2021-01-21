@php
     $admin = Auth::user()->roles->pluck('name')->contains('admin');
@endphp

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    </head>
    <body>

      <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">Issue Management System</h3>
                    <strong><b>DC</b>L</strong>
                </div>


                <ul class="list-unstyled components">
                  <li class="active">
                      <a href="#bookSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="glyphicon glyphicon-list-alt"></i>
                          Issues
                      </a>
                      <ul class="collapse list-unstyled" id="bookSubmenu">
                            @if($admin) 
                            <li>
                            <a href="/addIs">
                              <i class="glyphicon glyphicon-plus"></i>
                              Add a new issue 
                            </a>
                          </li> 
                            @endif
                          <li>
                            <a href="/list">
                              <i class="lyphicon glyphicon-list"></i>
                              Issue List
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li>

                    @if($admin)         
                    <li>
                        <a href="#catSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-tags"></i>
                            Departments
                        </a>
                        <ul class="collapse list-unstyled" id="catSubmenu">
                            <li>
                              <a href="/department">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add a New Department
                              </a>
                            </li>
                            <li>
                              <a href="/deplist">
                                <i class="glyphicon glyphicon-list"></i>
                                Department List
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#authorSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-pencil"></i>
                            Technicians
                        </a>
                        <ul class="collapse list-unstyled" id="authorSubmenu">
                            
                            <li>
                              <a href="/technician">
                                <i class="glyphicon glyphicon-list"></i>
                                Technicians List
                              </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                


                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>
                            </ul>
                            

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </nav>
                <div class="mainContentArea">
                @yield('content')
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
