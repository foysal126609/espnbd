<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/adminAssets/')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
                    {{--<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
                {{--</ul>--}}
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-files-o"></i>--}}
                    {{--<span>Layout Options</span>--}}
                    {{--<span class="label label-primary pull-right">4</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>--}}
                    {{--<li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>--}}
                    {{--<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>--}}
                    {{--<li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="pages/widgets.html">--}}
                    {{--<i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                     Admin Info
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-user')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
                    <li><a href="{{url('/manage-user')}}"><i class="fa fa-circle-o"></i> Manage User</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                     Category Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-category')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="{{url('/manage-category')}}"><i class="fa fa-circle-o"></i> Manage Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                     Product Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-product')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
                    <li><a href="{{url('/manage-product')}}"><i class="fa fa-circle-o"></i> Manage Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                     Slider Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-slider')}}"><i class="fa fa-circle-o"></i> Add Slider</a></li>
                    <li><a href="{{url('/manage-slider')}}"><i class="fa fa-circle-o"></i> Manage Slider</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    Feature Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-feature')}}"><i class="fa fa-circle-o"></i> Add  Feature</a></li>
                    <li><a href="{{url('/manage-feature')}}"><i class="fa fa-circle-o"></i> Manage  Feature</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    Notice Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-notice')}}"><i class="fa fa-circle-o"></i> Add  Notice</a></li>
                    <li><a href="{{url('/manage-notice')}}"><i class="fa fa-circle-o"></i> Manage  Notice</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    Client Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-client-message')}}"><i class="fa fa-circle-o"></i> Add  Client Message</a></li>
                    <li><a href="{{url('/manage-client-message')}}"><i class="fa fa-circle-o"></i> Manage  Client Message</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    About Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-about')}}"><i class="fa fa-circle-o"></i> Add About </a></li>
                    <li><a href="{{url('/manage-about')}}"><i class="fa fa-circle-o"></i> Manage About</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    Team Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-team-message')}}"><i class="fa fa-circle-o"></i> Add Team Message </a></li>
                    <li><a href="{{url('/manage-team-message')}}"><i class="fa fa-circle-o"></i> Manage Team Message</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>