<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"  href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}"  href="/dashboard/posts">
              <span data-feather="grid"></span>
              My Posts
            </a>
          </li>
        </ul>

        @can('view_dashboard')
        <h6 class="sidebar-heading d-flex justtify=content-between align-items-center px-3 mt-4 mb-1 text-muted" >
          <span >Administrator</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/admin/posts') ? 'active' : '' }}"  href="/dashboard/admin/posts">
              <span data-feather="grid"></span>
              Publish
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/admin/districts*') ? 'active' : '' }}"  href="/dashboard/admin/districts">
            <span data-feather="map-pin"></span>
              District
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/admin/user') ? 'active' : '' }}"  href="/dashboard/admin/user">
            <span data-feather="users"></span>
              User List
            </a>
          </li>
        </ul>
        @endcan
      </div>
    </nav>