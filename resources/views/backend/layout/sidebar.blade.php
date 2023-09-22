<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('frontend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CleanTown</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('frontend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{@Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
    
           
                <li class="nav-item">
                  <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
  
         
   
            </ul>
    
          </li>
          @php
          $prefix = Request::route()->getPrefix();
          $route = Request::route()->getName();
          @endphp
          <li class="nav-item">
            <a href="{{route('logo.index')}}" class="nav-link {{$route == 'logo.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logo
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link {{$route == 'about.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link {{$route == 'service.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Services
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('gallery.index')}}" class="nav-link {{$route == 'gallery.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Gallery
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('blog.index')}}" class="nav-link {{$route == 'blog.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('address.index')}}" class="nav-link {{$route == 'address.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Address
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('social.index')}}" class="nav-link {{$route == 'social.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Social Media
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('partner.index')}}" class="nav-link {{$route == 'partner.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Partner/ Client
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('feedback.index')}}" class="nav-link {{$route == 'feedback.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Client Feedback 
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('project.index')}}" class="nav-link {{$route == 'project.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Project List
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>