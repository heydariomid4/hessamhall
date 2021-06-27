<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ auth()->user()->image }}" alt="user-img" title="{{ auth()->user()->name }}" class="img-circle img-thumbnail img-responsive">
                <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">{{ auth()->user()->name }}</a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="text-custom" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-image"></i> <span> گالری </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('gallery.create') }}">افزودن</a></li>
                        <li><a href="{{ route('gallery.index') }}">لیست گالری</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect active"><i class="zmdi zmdi-view-toc"></i> <span> دسته بندی </span> </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
