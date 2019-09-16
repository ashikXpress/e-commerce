<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{optional(\Auth::guard('admin')->user())->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
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
        <ul class="sidebar-menu" data-widget="tree">


            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{url('dashboard')}}" >
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin*') ? 'active' : '' }}" style="height: auto;">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Admin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" {{ Request::is('admin*') ? 'style="display: block' : 'none' }}>
                    <li><a href="{{route('admin.read')}}"><i class="fa fa-circle-o"></i> Admin Info</a></li>
                    <li><a href="{{route('admin.create.form')}}"><i class="fa fa-circle-o"></i> Admin Create</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('user*') ? 'active' : '' }}" style="height: auto;">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>User</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" {{ Request::is('user*') ? 'style="display: block' : 'none' }}>
                    <li><a href="{{route('user.data.read')}}"><i class="fa fa-circle-o"></i> User Info</a></li>

                </ul>
            </li>
            <li class="treeview {{ Request::is('service*') ? 'active' : '' }}" style="height: auto;">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Service</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" {{ Request::is('service*') ? 'style="display: block' : 'none' }}>
                    <li><a href="{{route('service.read')}}"><i class="fa fa-circle-o"></i> Service Info</a></li>
                    <li><a href="{{route('service.create.form')}}"><i class="fa fa-circle-o"></i> Service Create</a></li>

                </ul>
            </li>
            <li class="treeview {{ Request::is('portfolio*') ? 'active' : '' }}" style="height: auto;">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Portfolio</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" {{ Request::is('portfolio*') ? 'style="display: block' : 'none' }}>
                    <li><a href="{{route('portfolio.read')}}"><i class="fa fa-circle-o"></i> Portfolio Info</a></li>

                    <li><a href="{{route('portfolio.create.form')}}"><i class="fa fa-circle-o"></i> Portfolio Create</a></li>

                </ul>
            </li>
            <li class="treeview {{ Request::is('gallery*') ? 'active' : '' }}" style="height: auto;">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" {{ Request::is('gallery*') ? 'style="display: block' : 'none' }}>
                    <li><a href="{{route('gallery.read')}}"><i class="fa fa-circle-o"></i> Gallery Info</a></li>
                    <li><a href="{{route('gallery.create.form')}}"><i class="fa fa-circle-o"></i> Gallery Create</a></li>

                </ul>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
