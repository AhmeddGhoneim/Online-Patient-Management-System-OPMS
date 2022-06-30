<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ Route('dashboard.index') }}">FindUrDoctor</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{ request()->segment(1)=='doctor-panel' && request()->segment(2)=='' ? 'active' : '' }} ">
                            <a href="{{ Route('doctor.panel.index') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->segment(2)=='editProfile' ? 'active' : '' }} ">
                            <a href="{{ Route('doctor.profile') }}" class='sidebar-link'>
                                <i class="fa fa-user"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>

                            <li class="sidebar-item {{ request()->segment('2')=='appointments' ? 'active' : '' }}">
                                <a href="{{ Route('doctor.appointments.index') }}" class='sidebar-link'>
                                    <i class="bi bi-book"></i>
                                    <span>Appointments</span>
                                </a>
                                {{-- <ul class="submenu {{ request()->segment('2')=='appointments' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='appointments' ? 'active' : '' }}">
                                            <a href="{{ Route('doctor.appointments.index') }}"> appointments List</a>
                                        </li>
                                </ul> --}}
                            </li>

                            <li class="sidebar-item {{ request()->segment('2')=='patients' ? 'active' : '' }}">
                                <a href="{{ Route('doctor.patients.index') }}" class='sidebar-link'>
                                    <i class="bi bi-people"></i>
                                    <span>Patients</span>
                                </a>
                            </li>

                            <li class="sidebar-item has-sub {{ request()->segment('2')=='blogs' ? 'active' : '' }}">
                                <a href="" class='sidebar-link'>
                                    <i class="bi bi-book-half"></i>
                                    <span>Blogs</span>
                                </a>

                                  <ul class="submenu {{ request()->segment('2')=='blogs' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='blogs' && request()->segment('3')=='index' ? 'active' : '' }}">
                                            <a href="{{ Route('doctor.blogs.index') }}"> Blogs List</a>
                                        </li>

                                        <li class="submenu-item  {{request()->segment('2')=='blogs' && request()->segment('3')=='create' ? 'active' : '' }}">
                                            <a href="{{ Route('doctor.blogs.create') }}"> Add Blog</a>
                                        </li>
                                </ul>
                            </li>

                            <li class="sidebar-item ">
                                <a href="{{ Route('doctor.logout') }}" class='sidebar-link'>
                                    <i class="bi bi-box-arrow-left"></i>
                                    <span>Logout</span>
                                </a>
                            </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
      
    </div>
</body>