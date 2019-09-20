<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li><a href="{{ route('admin.get.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Blog</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('admin.get.tag.list') }}"><i class="fa fa-circle-o"></i> Tag</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Menu</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Article</a></li>
        </ul>
    </li>
    {{--<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>--}}
    {{--<li class="header">LABELS</li>--}}
    {{--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>--}}
</ul>