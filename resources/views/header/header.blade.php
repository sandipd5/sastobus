<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SB</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sasto Bus</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="{{url('notification')}}">View all</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/images/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Creatu Developers</span>
                    </a>
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('clients.create')}}"><i class="fa fa-circle-o"></i>Add New User</a></li>
                    <li><a href="{{route('clients.index')}}"><i class="fa fa-circle-o"></i>View All Users</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Wallet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-wallet')}}"><i class="fa fa-circle-o"></i>Add New Wallet</a></li>
                    <li><a href="{{url('view-all-wallet')}}"><i class="fa fa-circle-o"></i>View All Wallets</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-check-circle"></i> <span>Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="active"><a href="{{url('')}}"><i class="fa fa-circle-o"></i>Add New Booking</a></li> -->
                    <li><a href="{{url('view-all-booking')}}"><i class="fa fa-circle-o"></i>View All Bookings</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i> <span>Hire Bus</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="active"><a href="{{url('')}}"><i class="fa fa-circle-o"></i>Add New Bus</a></li> -->
                    <li><a href="{{url('view-all-hire-bus')}}"><i class="fa fa-circle-o"></i>View All Hire Buses</a></li>
                </ul>
            </li>


            <li class="header">Travel</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-marker"></i> <span>Travel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-travel')}}"><i class="fa fa-circle-o"></i>Add New Travel</a></li>
                    <li><a href="{{url('view-all-travel')}}"><i class="fa fa-circle-o"></i>View All Travels</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map"></i> <span>Travel Route</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-travel-route')}}"><i class="fa fa-circle-o"></i>Add New Route</a></li>
                    <li><a href="{{url('view-all-travel-route')}}"><i class="fa fa-circle-o"></i>View All Routes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Travel Passenger</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-travel-passenger')}}"><i class="fa fa-circle-o"></i>Add New Travel Passenger</a></li>
                    <li><a href="{{url('view-all-travel-passenger')}}"><i class="fa fa-circle-o"></i>View All Travel Passengers</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Travel Schedule</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-travel-schedule')}}"><i class="fa fa-circle-o"></i>Add New Travel Schedule</a></li>
                    <li><a href="{{url('view-all-travel-schedule')}}"><i class="fa fa-circle-o"></i>View All Travel Schedules</a></li>
                </ul>
            </li>



            <li class="header">Vehicle</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i> <span>Vehicle Type</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-vehicle-type')}}"><i class="fa fa-circle-o"></i>Add New Vehicle Type</a></li>
                    <li><a href="{{url('view-all-vehicle-type')}}"><i class="fa fa-circle-o"></i>View All Vehicle Types</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i> <span>Vehicle</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-vehicle')}}"><i class="fa fa-circle-o"></i>Add New Vehicle</a></li>
                    <li><a href="{{url('view-all-vehicle')}}"><i class="fa fa-circle-o"></i>View All Vehicle</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-medium"></i> <span>Vehicle Seat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-vehicle-seat')}}"><i class="fa fa-circle-o"></i>Add New Vehicle Seat</a></li>
                    <li><a href="{{url('view-all-vehicle-seat')}}"><i class="fa fa-circle-o"></i>View All Vehicle Seats</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-o"></i> <span>Vehicle Routine</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-vehicle-routine')}}"><i class="fa fa-circle-o"></i>Add New Vehicle Routine</a></li>
                    <li><a href="{{url('view-all-vehicle-routine')}}"><i class="fa fa-circle-o"></i>View All Vehicle Routines</a></li>
                </ul>
            </li>


            <li class="header">Advertisement</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-television"></i> <span>Advertisement</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('add-new-advertisement')}}"><i class="fa fa-circle-o"></i>Add New Advertisement</a></li>
                    <li><a href="{{url('view-all-advertisement')}}"><i class="fa fa-circle-o"></i>View All Advertisement</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
