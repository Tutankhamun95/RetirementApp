<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center{{Request::is('superadmin/dashboard') ? ' active' : ''}}" href="{{route('superadmin.dashboard')}}">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
        <div class="sidebar-brand-text mx-3">{{Auth::user()->name}}</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        

        @if (Request::is('superadmin*'))

                <!-- Nav Item - Dashboard -->
                <li class="nav-item{{Request::is('superadmin/dashboard') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
          
                <!-- Divider -->
                <hr class="sidebar-divider">
          
                <!-- Heading -->
                <div class="sidebar-heading">
                  Interface
                </div>

                <li class="nav-item{{Request::is('superadmin/user*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.user.index')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
                </li>

                <li class="nav-item{{Request::is('superadmin/agent*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.agent.index')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Agents</span></a>
                </li>

                <li class="nav-item{{Request::is('superadmin/school*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.school.index')}}">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Departments</span></a>
                </li>

                <li class="nav-item{{Request::is('superadmin/project*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.project.index')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Projects</span></a>
                </li>
                <li class="nav-item{{Request::is('superadmin/pending/project') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.project.pending')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Pending Projects</span></a>
                </li>

                {{-- <li class="nav-item{{Request::is('superadmin/reading*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('superadmin.reading.index')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Readings</span></a>
                </li> --}}


            
        @endif

                @if (Request::is('schooladmin*'))

                <!-- Nav Item - Dashboard -->
                <li class="nav-item{{Request::is('schooladmin/dashboard') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('schooladmin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
          
                <!-- Divider -->
                <hr class="sidebar-divider">
          
                <!-- Heading -->
                <div class="sidebar-heading">
                  Interface
                </div>



                <li class="nav-item{{Request::is('schooladmin/project*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('schooladmin.project.index')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Projects</span></a>
                </li>

                <li class="nav-item{{Request::is('schooladmin/reading*') ? ' active' : ''}}">
                  <a class="nav-link" href="{{route('schooladmin.reading.index')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Readings</span></a>
                </li>
            
        @endif

              @if (Request::is('student*'))

              <!-- Nav Item - Dashboard -->
              <li class="nav-item{{Request::is('student/dashboard') ? ' active' : ''}}">
                <a class="nav-link" href="{{route('student.dashboard')}}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
              </li>
        
              <!-- Divider -->
              <hr class="sidebar-divider">
        
              <!-- Heading -->
              <div class="sidebar-heading">
                Interface
              </div>

              <li class="nav-item{{Request::is('student/project*') ? ' active' : ''}}">
                <a class="nav-link" href="{{route('student.project.index')}}">
                  <i class="fas fa-fw fa-book"></i>
                  <span>Projects</span></a>
              </li>

              <li class="nav-item{{Request::is('student/reading*') ? ' active' : ''}}">
                <a class="nav-link" href="{{route('student.reading.index')}}">
                  <i class="fas fa-fw fa-book"></i>
                  <span>Readings</span></a>
              </li>
          @endif
  
        
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          
        </div>
  

  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>