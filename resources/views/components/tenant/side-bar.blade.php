<div>
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Comrade</b>Keja Plan</span>
    </a> App

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{auth()->user()->name}}</a>
          <small class="text-white">{{auth()->user()->email}}</small>
         
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
            <a href="{{route('tenant.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
              <p class="text">Home</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{route('roomates.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
            </svg>
              <p>Roomate</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tenant.orders.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />
            </svg>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('bids.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />
            </svg>
              <p>Bids</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('bids.notifications')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />
            </svg>
              <p>Notification</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('locations.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />
            </svg>
              <p>location</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
              <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />
            </svg>
              <p>category</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>