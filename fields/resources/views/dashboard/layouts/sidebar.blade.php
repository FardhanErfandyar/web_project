<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
            @can('view_dashboard_add')
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/addfield') ? 'active' : '' }}" href="/dashboard/addfield">
              <span data-feather="grid"></span>
              Add Field
              @endcan
            @can('view_dashboard')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="grid"></span>
              Posts
              @endcan
            </a>
          </li>
        </ul>
      </div>
    </nav>