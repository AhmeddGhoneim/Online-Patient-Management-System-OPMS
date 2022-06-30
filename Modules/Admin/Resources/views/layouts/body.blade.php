<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ Route('dashboard.index') }}">Find Ur Doctor</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{ request()->segment(1)=='dashboard' && request()->segment(2)=='' ? 'active' : '' }} ">
                            <a href="{{ Route('dashboard.index') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                  

                
                            <li class="sidebar-item {{ request()->segment('2')=='category' ? 'active' : '' }} has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-building"></i>
                                    <span>categories</span>
                                </a>
                                <ul class="submenu {{ request()->segment('2')=='category' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='category' && request()->segment('3')=='index' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.category.index') }}"> categories List</a>
                                        </li>
                                  
                                   
                                        <li class="submenu-item  {{ request()->segment('2')=='category' && request()->segment('3')=='create' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.category.create') }}">Add Category   </a>
                                        </li>
                                    
                                </ul>
                            </li>

                            <li class="sidebar-item {{ request()->segment('2')=='company' ? 'active' : '' }} has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-building"></i>
                                    <span>Doctores</span>
                                </a>
                                <ul class="submenu {{ request()->segment('2')=='doctor' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='doctor' && request()->segment('3')=='index' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.doctor.index') }}"> Doctores List</a>
                                        </li>
                                  
                                   
                                        <li class="submenu-item  {{ request()->segment('2')=='doctor' && request()->segment('3')=='create' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.doctor.create') }}">Add Doctor</a>
                                        </li>
                                    
                                </ul>
                            </li>


                            <li class="sidebar-item {{ request()->segment('2')=='company' ? 'active' : '' }} has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-building"></i>
                                    <span>Patients</span>
                                </a>
                                <ul class="submenu {{ request()->segment('2')=='patient' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='patient' && request()->segment('3')=='index' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.patient.index') }}"> Patients List</a>
                                        </li>
                                  
                                   
                                        <li class="submenu-item  {{ request()->segment('2')=='patient' && request()->segment('3')=='create' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.patient.create') }}">Add Patient</a>
                                        </li>
                                    
                                </ul>
                            </li>


                          

                            <li class="sidebar-item {{ request()->segment('2')=='appointment' ? 'active' : '' }} has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-building"></i>
                                    <span>appointments</span>
                                </a>
                                <ul class="submenu {{ request()->segment('2')=='appointment' ? 'active' : '' }}">
                                  
                                        <li class="submenu-item  {{ request()->segment('2')=='appointment' && request()->segment('3')=='index' ? 'active' : '' }}">
                                            <a href="{{ Route('admin.appointment.index') }}"> appointments List</a>
                                        </li>
                                </ul>
                            </li>

                            <li class="sidebar-item {{ request()->segment('2')=='contact-us' ? 'active' : '' }}">
                                <a href="{{ route('admin.contact') }}" class='sidebar-link'>
                                    <i class="bi bi-building"></i>
                                    <span>Contact Us List</span>
                                </a>
                            </li>


                            <li class="sidebar-item ">
                                <a href="{{ Route('logout') }}" class='sidebar-link'>
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